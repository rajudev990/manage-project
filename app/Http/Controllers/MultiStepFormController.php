<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MultiStepFormController extends Controller
{
    public function studentAdmission()
    {
        return view('student.index');
    }
    public function showStep($step)
    {
        $data = Session::get('formData', []); // session থেকে আগের data নিয়ে আসা
        return view("student.step{$step}", compact('data'));
    }

    public function postStep(Request $request, $step)
    {
        $data = Session::get('formData', []);

        if ($step == 1) {
            $validated = $request->validate([
                'name' => 'nullable|string|max:100',
                'email' => 'nullable|email',
            ]);
        } elseif ($step == 2) {
            $validated = $request->validate([
                'address' => 'nullable|string|max:255',
                'city' => 'nullable|string|max:100',
            ]);
        } elseif ($step == 3) {
            $validated = $request->validate([
                'payment_method' => 'nullable',
            ]);
        } elseif ($step == 4) {
            $validated = $request->validate([
                'payment_method' => 'nullable',
            ]);
        } elseif ($step == 5) {
            $validated = $request->validate([
                'payment_method' => 'nullable',
            ]);
            
        }
        elseif ($step == 6) {
            $validated = $request->validate([
                'payment_method' => 'nullable',
            ]);
            
        }
        elseif ($step == 7) {
            $validated = $request->validate([
                'payment_method' => 'nullable',
            ]);
            
        }

        // merge করে session এ save করা
        $data = array_merge($data, $validated);
        Session::put('formData', $data);

        // যদি শেষ ধাপ হয়
        if ($step == 7) {
            // ✅ এখানে Payment Gateway integration হবে
            // Payment success হলে ডাটাবেজে save করুন
            // Example:
            // FormSubmission::create($data);

            Session::forget('formData'); // session clear
            return redirect()->route('form.step', 1)->with('success', 'Form submitted & payment successful!');
        }

        return redirect()->route('form.step', $step + 1);
    }
}
