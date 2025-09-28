@extends('student.app')

@section('student')

<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <!-- Progress Header (Original Design) -->
                <div class="progress-container mb-4">
                    <h5 class="mb-0 text-light title">Estimated time remaining: 12 minutes</h5>
                    <div class="progress mt-2">
                        <div class="progress-bar" id="progressBar" role="progressbar" style="width: 10%;"></div>
                    </div>
                    <small id="progressText" class="text-light">10%</small>
                </div>
            </div>
        </div>

        <form action="{{ route('form.step.post', 2) }}" method="POST" enctype="multipart/form-data" id="form">
            @csrf

            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <!-- Primary Parent / Guardian -->

                    <div class="card p-4 mb-3" style="background-color:#0c2a58;border-radius:24px;color:#FFF;">
                        <div class="card-body">
                            <h3 class="text-center mb-5" style="color: #AE9A66;font-size: 24px;font-weight: 600;">
                                Primary Parent / Guardian Information
                            </h3>

                            <div class="row">
                                <!-- Title -->
                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label for="title">Title</label>
                                        <select name="title" id="title" class="form-control form-select" required>
                                            <option value="">-- Select --</option>
                                            @foreach(['Mr','Mrs','Miss','Ms','Mx','Dr','Prof','Rev','Sir','Dame','Lady','Lord'] as $title)
                                            <option value="{{ $title }}" {{ old('title', $data['title'] ?? '') == $title ? 'selected' : '' }}>
                                                {{ $title }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- First Name -->
                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label for="fname">First Name <span class="text-danger">*</span></label>
                                        <input type="text" name="fname" class="form-control" placeholder="First name here"
                                            value="{{ old('fname', $data['fname'] ?? '') }}" required>
                                        @error('fname') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- Last Name -->
                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label for="lname">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" name="lname" class="form-control" placeholder="Last name here"
                                            value="{{ old('lname', $data['lname'] ?? '') }}" required>
                                        @error('lname') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- Relationship -->
                                <div class="col-lg-12">
                                    <div class="form-group mb-4">
                                        <label for="relationship">Relationship to Student(s) <span class="text-danger">*</span></label>
                                        <select name="relationship" id="relationship" class="form-control form-select" required>
                                            <option value="">-- Select --</option>
                                            @foreach(['Father','Mother','Step-Father','Step-Mother','Guardian','Brother','Sister','Uncle','Aunt','Grandfather','Grandmother','Other'] as $rel)
                                            <option value="{{ $rel }}" {{ old('relationship', $data['relationship'] ?? '') == $rel ? 'selected' : '' }}>
                                                {{ $rel }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('relationship') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- Contact Info -->
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="email">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control" placeholder="Your email here"
                                            value="{{ old('email', $data['email'] ?? '') }}" required>
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="confirm_email">Confirm Email Address <span class="text-danger">*</span></label>
                                        <input type="email" name="confirm_email" class="form-control" placeholder="Confirm email"
                                            value="{{ old('confirm_email', $data['confirm_email'] ?? '') }}" required>
                                        @error('confirm_email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label for="mobile_number">Mobile Number <span class="text-danger">*</span></label>
                                        <input type="text" name="mobile_number" class="form-control"
                                            value="{{ old('mobile_number', $data['mobile_number'] ?? '') }}" required>
                                        @error('mobile_number') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label for="home_telephone">Home Telephone <span class="text-danger">*</span></label>
                                        <input type="text" name="home_telephone" class="form-control"
                                            value="{{ old('home_telephone', $data['home_telephone'] ?? '') }}" required>
                                        @error('home_telephone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label for="work_number">Work Number <span class="text-danger">*</span></label>
                                        <input type="text" name="work_number" class="form-control"
                                            value="{{ old('work_number', $data['work_number'] ?? '') }}" required>
                                        @error('work_number') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="address">Street Address <span class="text-danger">*</span></label>
                                        <input type="text" name="address" class="form-control"
                                            value="{{ old('address', $data['address'] ?? '') }}" required>
                                        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="apartment">Apartment, Suite, etc <span class="text-danger">*</span></label>
                                        <input type="text" name="apartment" class="form-control"
                                            value="{{ old('apartment', $data['apartment'] ?? '') }}">
                                        @error('apartment') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="city">City <span class="text-danger">*</span></label>
                                        <input type="text" name="city" class="form-control"
                                            value="{{ old('city', $data['city'] ?? '') }}" required>
                                        @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="province">State/Province <span class="text-danger">*</span></label>
                                        <input type="text" name="province" class="form-control"
                                            value="{{ old('province', $data['province'] ?? '') }}" required>
                                        @error('province') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="postal_code">Zip/Postal Code <span class="text-danger">*</span></label>
                                        <input type="text" name="postal_code" class="form-control"
                                            value="{{ old('postal_code', $data['postal_code'] ?? '') }}" required>
                                        @error('postal_code') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="country">Country of Residence <span class="text-danger">*</span></label>
                                        <input type="text" name="country" class="form-control"
                                            value="{{ old('country', $data['country'] ?? '') }}" required>
                                        @error('country') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- File Upload -->
                                <div class="col-lg-12 mt-3">
                                    <div class="card">
                                        <div class="card-body text-dark">
                                            <h3>Documents <span class="text-danger">*</span></h3>
                                            <span class="ps-3">Please Provide:</span>
                                            <ol>
                                                <li>Proof of ID (Passport, Birth Certificate, National Identity Card)</li>
                                                <li>Previous Academic Years Progress Report</li>
                                            </ol>

                                            <div class="row">
                                                <div class="col-lg-6 text-center">
                                                    <label class="form-label d-block">Proof Of Parent's ID <span class="text-danger">*</span></label>
                                                    <input type="file" name="parent_id_proof" id="parentIdFile" class="d-none">
                                                    <label for="parentIdFile" class="btn form-control" style="background: #061E42;color:#FFF;">
                                                        Choose File <i class="fas fa-plus"></i>
                                                    </label>
                                                    <div id="fileName" class="mt-2 text-muted">
                                                        {{ old('parent_id_proof') ? old('parent_id_proof') : 'No file chosen yet' }}
                                                    </div>
                                                    @error('parent_id_proof') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>

                                                <div class="col-lg-6 text-center">
                                                    <label class="form-label d-block">Progress Report <span class="text-danger">*</span></label>
                                                    <input type="file" name="progress_report" id="progressFile" class="d-none">
                                                    <label for="progressFile" class="btn form-control" style="background: #061E42;color:#FFF;">
                                                        Choose File <i class="fas fa-plus"></i>
                                                    </label>
                                                    <div id="progressFileName" class="mt-2 text-muted">
                                                        {{ old('progress_report') ? old('progress_report') : 'No file chosen yet' }}
                                                    </div>
                                                    @error('progress_report') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- end row -->
                        </div>
                    </div>

                    <!-- Secondary Guardian (optional, same pattern as above but fields not required) -->
                    <div class="card p-4 mb-3" style="background-color:#0c2a58;border-radius:24px;color:#FFF;">
                        <div class="card-body">
                            <h3 class="text-center mb-5" style="color: #AE9A66;font-size: 24px;font-weight: 600;">
                                Secondary Parent / Guardian Information
                            </h3>

                            <div class="row">
                                <!-- Title -->
                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label for="secondary_title">Title</label>
                                        <select name="secondary_title" id="secondary_title" class="form-control form-select" required>
                                            <option value="">-- Select --</option>
                                            @foreach(['Mr','Mrs','Miss','Ms','Mx','Dr','Prof','Rev','Sir','Dame','Lady','Lord'] as $title)
                                            <option value="{{ $title }}" {{ old('secondary_title', $data['secondary_title'] ?? '') == $title ? 'selected' : '' }}>
                                                {{ $title }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('secondary_title') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- First Name -->
                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label for="secondary_fname">First Name <span class="text-danger">*</span></label>
                                        <input type="text" name="secondary_fname" class="form-control" placeholder="First name here"
                                            value="{{ old('secondary_fname', $data['secondary_fname'] ?? '') }}" required>
                                        @error('secondary_fname') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- Last Name -->
                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label for="secondary_lname">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" name="secondary_lname" class="form-control" placeholder="Last name here"
                                            value="{{ old('secondary_lname', $data['secondary_lname'] ?? '') }}" required>
                                        @error('secondary_lname') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- Relationship -->
                                <div class="col-lg-12">
                                    <div class="form-group mb-4">
                                        <label for="secondary_relationship">Relationship to Student(s) <span class="text-danger">*</span></label>
                                        <select name="secondary_relationship" id="secondary_relationship" class="form-control form-select" required>
                                            <option value="">-- Select --</option>
                                            @foreach(['Father','Mother','Step-Father','Step-Mother','Guardian','Brother','Sister','Uncle','Aunt','Grandfather','Grandmother','Other'] as $rel)
                                            <option value="{{ $rel }}" {{ old('secondary_relationship', $data['secondary_relationship'] ?? '') == $rel ? 'selected' : '' }}>
                                                {{ $rel }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('secondary_relationship') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- Contact Info -->
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="secondary_email">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" name="secondary_email" class="form-control" placeholder="Your email here"
                                            value="{{ old('secondary_email', $data['secondary_email'] ?? '') }}" required>
                                        @error('secondary_email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="secondary_confirm_email">Confirm Email Address <span class="text-danger">*</span></label>
                                        <input type="email" name="secondary_confirm_email" class="form-control" placeholder="Confirm email"
                                            value="{{ old('secondary_confirm_email', $data['secondary_confirm_email'] ?? '') }}" required>
                                        @error('secondary_confirm_email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label for="secondary_mobile_number">Mobile Number <span class="text-danger">*</span></label>
                                        <input type="text" name="secondary_mobile_number" class="form-control"
                                            value="{{ old('secondary_mobile_number', $data['secondary_mobile_number'] ?? '') }}" required>
                                        @error('secondary_mobile_number') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label for="secondary_home_telephone">Home Telephone <span class="text-danger">*</span></label>
                                        <input type="text" name="secondary_home_telephone" class="form-control"
                                            value="{{ old('secondary_home_telephone', $data['secondary_home_telephone'] ?? '') }}" required>
                                        @error('secondary_home_telephone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label for="secondary_work_number">Work Number <span class="text-danger">*</span></label>
                                        <input type="text" name="secondary_work_number" class="form-control"
                                            value="{{ old('secondary_work_number', $data['secondary_work_number'] ?? '') }}" required>
                                        @error('secondary_work_number') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="secondary_address">Street Address <span class="text-danger">*</span></label>
                                        <input type="text" name="secondary_address" class="form-control"
                                            value="{{ old('secondary_address', $data['secondary_address'] ?? '') }}" required>
                                        @error('secondary_address') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="secondary_apartment">Apartment, Suite, etc <span class="text-danger">*</span></label>
                                        <input type="text" name="secondary_apartment" class="form-control"
                                            value="{{ old('secondary_apartment', $data['secondary_apartment'] ?? '') }}">
                                        @error('secondary_apartment') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="secondary_city">City <span class="text-danger">*</span></label>
                                        <input type="text" name="secondary_city" class="form-control"
                                            value="{{ old('secondary_city', $data['secondary_city'] ?? '') }}" required>
                                        @error('secondary_city') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="secondary_province">State/Province <span class="text-danger">*</span></label>
                                        <input type="text" name="secondary_province" class="form-control"
                                            value="{{ old('secondary_province', $data['secondary_province'] ?? '') }}" required>
                                        @error('secondary_province') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="secondary_postal_code">Zip/Postal Code <span class="text-danger">*</span></label>
                                        <input type="text" name="secondary_postal_code" class="form-control"
                                            value="{{ old('secondary_postal_code', $data['secondary_postal_code'] ?? '') }}" required>
                                        @error('secondary_postal_code') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="secondary_country">Country of Residence <span class="text-danger">*</span></label>
                                        <input type="text" name="secondary_country" class="form-control"
                                            value="{{ old('secondary_country', $data['secondary_country'] ?? '') }}" required>
                                        @error('secondary_country') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <!-- File Upload -->
                                <div class="col-lg-12 mt-3">
                                    <div class="card">
                                        <div class="card-body text-dark">
                                            <h3>Documents <span class="text-danger">*</span></h3>
                                            <span class="ps-3">Please Provide:</span>
                                            <ol>
                                                <li>Proof of ID (Passport, Birth Certificate, National Identity Card)</li>
                                                <li>Previous Academic Years Progress Report</li>
                                            </ol>

                                            <div class="row">
                                                <div class="col-lg-6 text-center">
                                                    <label class="form-label d-block">Proof Of Parent's ID <span class="text-danger">*</span></label>
                                                    <input type="file" name="file3" id="parentIdFile" class="d-none">
                                                    <label for="parentIdFile" class="btn form-control" style="background: #061E42;color:#FFF;">
                                                        Choose File <i class="fas fa-plus"></i>
                                                    </label>
                                                    <div id="fileName" class="mt-2 text-muted">
                                                        {{ old('file3') ? old('file3') : 'No file chosen yet' }}
                                                    </div>
                                                    @error('file3') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>

                                                <div class="col-lg-6 text-center">
                                                    <label class="form-label d-block">Progress Report <span class="text-danger">*</span></label>
                                                    <input type="file" name="file4" id="progressFile" class="d-none">
                                                    <label for="progressFile" class="btn form-control" style="background: #061E42;color:#FFF;">
                                                        Choose File <i class="fas fa-plus"></i>
                                                    </label>
                                                    <div id="progressFileName" class="mt-2 text-muted">
                                                        {{ old('file4') ? old('file4') : 'No file chosen yet' }}
                                                    </div>
                                                    @error('file4') <span class="text-danger">{{ $message }}</span> @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div> <!-- end row -->
                        </div>
                    </div>



                </div>
            </div>

            <!-- Buttons -->
            <div class="row mt-3">
                <div class="col-lg-10 m-auto">
                    <button type="submit" class="btn custom-btn w-100">Continue</button>
                    <div class="text-center mt-4">
                        <a href="{{ route('form.step', 1) }}" class="text-light text-decoration-none">
                            <i class="fa fa-arrow-left"></i> Go Back
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>



@endsection


@section('script')
<script>
    // File preview
    document.getElementById('parentIdFile').addEventListener('change', function(e) {
        let fileName = e.target.files.length ? e.target.files[0].name : "No file chosen yet";
        document.getElementById('fileName').textContent = fileName;
    });

    document.getElementById('progressFile').addEventListener('change', function(e) {
        let fileName = e.target.files.length ? e.target.files[0].name : "No file chosen yet";
        document.getElementById('progressFileName').textContent = fileName;
    });
</script>
@endsection