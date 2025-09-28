<?php

namespace App\Http\Controllers;

use App\Models\FormStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\FormSubmission;
use App\Models\School;
use App\Models\StudentCourse;
use App\Models\StudentGroup;
use App\Models\StudentLanguage;
use App\Models\StudentPackage;
use App\Models\StudentSubject;
use App\Models\StudentYear;
use Stripe\Stripe;
use Stripe\PaymentIntent;


class MultiStepFormController extends Controller
{
    public function studentAdmission()
    {
        return view('student.index');
    }

    public function getYears($group_id)
    {
        $years = StudentYear::where('group_id', $group_id)->get(['id', 'name']);
        return response()->json($years);
    }

    public function getPackages($group_id, $year_id)
    {
        $packages = StudentPackage::all(); // StudentPackage just has names
        return response()->json($packages);
    }

    public function getCourseDetails(Request $request)
    {
        $group_id = $request->group_id;
        $year_id = $request->year_id;
        $package_id = $request->package_id;

        $course = StudentCourse::where('group_id', $group_id)
            ->where('year_id', $year_id)
            ->where('package_id', $package_id)
            ->first();

        if (!$course) return response()->json(['error' => 'No course found'], 404);

        // Fetch subjects names from StudentSubject
        $coreSubjects = $course->core_subject ?? [];
        $coreNames = StudentSubject::whereIn('id', $coreSubjects)->pluck('name');

        $islamicSubjects = $course->islamic_subject ?? [];
        $islamicNames = StudentSubject::whereIn('id', $islamicSubjects)->pluck('name');

        $additionalSubjects = $course->additional_subject ?? [];
        $additionalNames = StudentSubject::whereIn('id', $additionalSubjects)->pluck('name');

        // Fetch languages
        $languages = $course->language ?? [];
        $languageNames = StudentLanguage::whereIn('id', $languages)->pluck('name');

        return response()->json([
            'core_subject' => $coreNames,
            'islamic_subject' => $islamicNames,
            'additional_subject' => $additionalNames,
            'language' => $languageNames,
            'hifdh' => $course->hifdh ?? 0,
            'hifdh_text' => $course->hifdh_text ?? '',
        ]);
    }


    public function showStep($step)
    {
        $data = Session::get('formData', []); // session থেকে আগের data নিয়ে আসা
        $schools = School::where('status', 1)->get();
        $groups = StudentGroup::where('status', 1)->get();
        return view("student.step{$step}", compact('data', 'schools', 'groups'));
    }

    public function postStep(Request $request, $step)
    {
        $submissionId = Session::get('submission_id');

        // Step 1: Create submission
        if ($step == 1) {
            $validated = $request->validate([
                'selected_school' => 'nullable|string|max:255',
            ]);

            $submission = FormSubmission::create([
                'selected_school' => $validated['selected_school'] ?? null,
                'status' => 'in_progress',
            ]);

            Session::put('submission_id', $submission->id);
        }

        // Step 2: Parent info
        elseif ($step == 2) {
            $validated = $request->validate([
                'title' => 'required|string|max:20',
                'fname' => 'required|string|max:100',
                'lname' => 'required|string|max:100',
                'relationship' => 'required|string|max:50',
                'email' => 'required|email',
                'confirm_email' => 'required|email|same:email',
                'mobile_number' => 'required|string',
                'work_number' => 'required|string',
                'address' => 'required|string',
                'city' => 'required|string',
                'province' => 'required|string',
                'postal_code' => 'required|string',
                'country' => 'required|string',
                'secondary_city' => 'nullable|string',
            ]);

            FormSubmission::where('id', $submissionId)->update($validated);
        }

        // Step 3: Students
        elseif ($step == 3) {
            $validated = $request->validate([
                'fname.*' => 'required|string|max:100',
                'lname.*' => 'required|string|max:100',
                'dob.*' => 'required|date',
                'gender.*' => 'required|string',
                'nationality.*' => 'required|string',
                'start_date.*' => 'required|string',
                'group_id.*' => 'required|integer',
                'year_id.*' => 'required|integer',
                'package_id.*' => 'required|integer',
                'hifdh.*' => 'nullable|boolean',
                'student_file1.*' => 'nullable|file|mimes:pdf,jpg,jpeg,png',
                'student_file2.*' => 'nullable|file|mimes:pdf,jpg,jpeg,png',
            ]);

            $count = count($validated['fname']);
            for ($i = 0; $i < $count; $i++) {
                $file1Path = isset($request->file('student_file1')[$i]) ? $request->file('student_file1')[$i]->store('students', 'public') : null;
                $file2Path = isset($request->file('student_file2')[$i]) ? $request->file('student_file2')[$i]->store('students', 'public') : null;

                FormStudent::create([
                    'form_submission_id' => $submissionId,
                    'fname' => $validated['fname'][$i],
                    'lname' => $validated['lname'][$i],
                    'dob' => $validated['dob'][$i],
                    'gender' => $validated['gender'][$i],
                    'nationality' => $validated['nationality'][$i],
                    'start_date' => $validated['start_date'][$i],
                    'group_id' => $validated['group_id'][$i],
                    'year_id' => $validated['year_id'][$i],
                    'package_id' => $validated['package_id'][$i],
                    'hifdh' => $validated['hifdh'][$i] ?? 0,
                    'student_file1' => $file1Path,
                    'student_file2' => $file2Path,
                ]);
            }
        }

        // Step 4: Extra Info
        elseif ($step == 4) {
            $validated = $request->validate([
                'health_care' => 'nullable|boolean',
                'previus_school' => 'nullable|boolean',
                'access_protocol' => 'nullable|string',
                'aythority' => 'nullable|string',
                'name' => 'nullable|string',
                'special_education' => 'nullable|boolean',
                'medical_condition' => 'nullable|boolean',
                'direct_placement' => 'nullable|boolean',
                'accpet' => 'required',
            ]);

            FormSubmission::where('id', $submissionId)->update($validated);
        }

        // Step 5: Courses
        elseif ($step == 5) {
            $validated = $request->validate([
                'package' => 'required|string',
            ]);

            FormSubmission::where('id', $submissionId)->update([
                'package' => $validated['package']
            ]);
        }

        // Step 6: Signature
        elseif ($step == 6) {
            $validated = $request->validate([
                'Signature' => 'required|string',
                'Signature_accept' => 'accepted',
            ]);

            FormSubmission::where('id', $submissionId)->update($validated);
        }

        // Step 7: Payment
        elseif ($step == 7) {
            $validated = $request->validate([
                'payment_email' => 'required|email',
                'payment_country' => 'required|string',
                'payment_postal_code' => 'required|string',
                'payment_accept' => 'accepted',
            ]);

            $submission = FormSubmission::findOrFail($submissionId);

            Stripe::setApiKey(env('STRIPE_SECRET'));
            $paymentIntent = PaymentIntent::create([
                'amount' => 1000,
                'currency' => 'usd',
                'payment_method_types' => ['card'],
                'receipt_email' => $validated['payment_email'],
            ]);

            $submission->update([
                ...$validated,
                'status' => 'paid',
                'paid_amount' => 10.00,
                'transaction_id' => $paymentIntent->id,
                'payment_date' => now(),
            ]);

            Session::forget('submission_id');

            return redirect()->route('form.step', 1)->with('success', 'Form submitted & payment successful!');
        }

        return redirect()->route('form.step', $step + 1);
    }
}
