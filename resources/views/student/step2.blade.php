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

        <form action="{{ route('form.step.post', 2) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <div class="card p-4 mb-3 " style="background-color:#0c2a58;border-radius:24px;color:#FFF;">
                        <div class="card-body">

                            <h3 class="text-center mb-5" style="color: #AE9A66;font-size: 24px;font-weight: 600;">Primary Parent / Guardian Information</h3>

                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="form-group mb-4">
                                        <label for="title">Title</label>
                                        <select name="title" id="title" class="form-control form-select">
                                            <option value="">-- Select --</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Mx">Mx</option>
                                            <option value="Dr">Dr</option>
                                            <option value="Prof">Prof</option>
                                            <option value="Rev">Rev</option>
                                            <option value="Sir">Sir</option>
                                            <option value="Dame">Dame</option>
                                            <option value="Lady">Lady</option>
                                            <option value="Lord">Lord</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group mb-4">
                                        <label for="fname">First Name <span class="text-danger">*</span></label>
                                        <input type="text" name="fname" class="form-control" placeholder="First name here" required>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group mb-4">
                                        <label for="lname">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" name="lname" class="form-control" placeholder="Last name here" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mb-4">
                                        <label for="relationship">Relationship to Student(s)<span class="text-danger">*</span></label>
                                        <select name="relationship" id="relationship" class="form-control form-select" required>
                                            <option value="">-- Select --</option>
                                            <option value="Father">Father</option>
                                            <option value="Mother">Mother</option>
                                            <option value="Step-Father">Step-Father</option>
                                            <option value="Step-Mother">Step-Mother</option>
                                            <option value="Guardian">Guardian</option>
                                            <option value="Brother">Brother</option>
                                            <option value="Sister">Sister</option>
                                            <option value="Uncle">Uncle</option>
                                            <option value="Aunt">Aunt</option>
                                            <option value="Grandfather">Grandfather</option>
                                            <option value="Grandmother">Grandmother</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="email">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control" placeholder="Your email here" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="confirm_email">Confirm Email Address <span class="text-danger">*</span></label>
                                        <input type="email" name="confirm_email" class="form-control" placeholder="Your email here" required>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label for="mobile_number">Mobile Number <span class="text-danger">*</span></label>
                                        <input type="text" id="mobile_number" name="mobile_number" class="form-control phone-input" required>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label for="home_telephone">Home Telephone <span class="text-danger">*</span></label>
                                        <input type="text" id="home_telephone" name="home_telephone" class="form-control phone-input" required>


                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label for="work_number">Work Number <span class="text-danger">*</span></label>
                                        <input type="text" id="work_number" name="work_number" class="form-control phone-input" required>
                                    </div>
                                </div>



                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="address">Street Address <span class="text-danger">*</span></label>
                                        <input type="text" name="address" class="form-control" placeholder="Street address" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="apartment">Apartment, Suite, etc <span class="text-danger">*</span></label>
                                        <input type="text" name="apartment" class="form-control" placeholder="Apartment, Suite, etc" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="city">City <span class="text-danger">*</span></label>
                                        <input type="text" name="city" class="form-control" placeholder="City name" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="province">State/Province <span class="text-danger">*</span></label>
                                        <input type="text" name="province" class="form-control" placeholder="State/Province" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="postal_code">Zip/Postal Code <span class="text-danger">*</span></label>
                                        <input type="text" name="postal_code" class="form-control" placeholder="Zip/Postal Code" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="country">Country of Residence <span class="text-danger">*</span></label>
                                        <select id="country" name="country" class="form-control form-select country" data-live-search="true" title="-- Select Country --" required>
                                            <option value="Bangladesh">Bangladesh</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-lg-12 mt-3">
                                    <div class="card">
                                        <div class="card-body text-dark">
                                            <h3>Documents<span class="text-danger">*</span></h3>
                                            <span class="ps-3">Please Provide:</span>
                                            <ol>
                                                <li>Proof of ID (Password, Birth Certificate, National Identity Card)</li>
                                                <li>Previous Academic Years Progress Report</li>
                                            </ol>

                                            <div class="row">
                                                <div class="col-lg-4 text-center">
                                                    <label class="form-label d-block">Proof Of Parents ID <span class="text-danger">*</span></label>
                                                    <!-- Hidden File Input -->
                                                    <input type="file" id="parentIdFile" class="d-none">
                                                    <!-- Custom Button -->
                                                    <label for="parentIdFile" class="btn form-control" style="background: #061E42;color:#FFF;">
                                                        Choose File <i class="fas fa-plus"></i>
                                                    </label>
                                                    <!-- File Name Preview -->
                                                    <div id="fileName" class="mt-2 text-muted">
                                                        No file chosen yet
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4 text-center">
                                                    <label class="form-label d-block">Proof Of Parents ID <span class="text-danger">*</span></label>
                                                    <!-- Hidden File Input -->
                                                    <input type="file" id="parentIdFile" class="d-none">
                                                    <!-- Custom Button -->
                                                    <label for="parentIdFile" class="btn form-control" style="background: #061E42;color:#FFF;">
                                                        Choose File <i class="fas fa-plus"></i>
                                                    </label>
                                                    <!-- File Name Preview -->
                                                    <div id="fileName" class="mt-2 text-muted">
                                                        No file chosen yet
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>



                            </div>

                        </div>
                    </div>

                    <div class="card p-4 mb-3 " style="background-color:#0c2a58;border-radius:24px;color:#FFF;">
                        <div class="card-body">

                            <h3 class="text-center mb-5" style="color: #AE9A66;font-size: 24px;font-weight: 600;">Secondary Parent / Guardian Information</h3>

                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="form-group mb-4">
                                        <label for="title">Title</label>
                                        <select name="title" id="title" class="form-control form-select">
                                            <option value="">-- Select --</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Mx">Mx</option>
                                            <option value="Dr">Dr</option>
                                            <option value="Prof">Prof</option>
                                            <option value="Rev">Rev</option>
                                            <option value="Sir">Sir</option>
                                            <option value="Dame">Dame</option>
                                            <option value="Lady">Lady</option>
                                            <option value="Lord">Lord</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group mb-4">
                                        <label for="fname">First Name <span class="text-danger">*</span></label>
                                        <input type="text" name="fname" class="form-control" placeholder="First name here" required>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="form-group mb-4">
                                        <label for="lname">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" name="lname" class="form-control" placeholder="Last name here" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mb-4">
                                        <label for="relationship">Relationship to Student(s)<span class="text-danger">*</span></label>
                                        <select name="relationship" id="relationship" class="form-control form-select" required>
                                            <option value="">-- Select --</option>
                                            <option value="Father">Father</option>
                                            <option value="Mother">Mother</option>
                                            <option value="Step-Father">Step-Father</option>
                                            <option value="Step-Mother">Step-Mother</option>
                                            <option value="Guardian">Guardian</option>
                                            <option value="Brother">Brother</option>
                                            <option value="Sister">Sister</option>
                                            <option value="Uncle">Uncle</option>
                                            <option value="Aunt">Aunt</option>
                                            <option value="Grandfather">Grandfather</option>
                                            <option value="Grandmother">Grandmother</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="email">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control" placeholder="Your email here" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="confirm_email">Confirm Email Address <span class="text-danger">*</span></label>
                                        <input type="email" name="confirm_email" class="form-control" placeholder="Your email here" required>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label for="mobile_number">Mobile Number <span class="text-danger">*</span></label>
                                        <input type="text" id="mobile_number" name="mobile_number" class="form-control phone-input" required>

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label for="home_telephone">Home Telephone <span class="text-danger">*</span></label>
                                        <input type="text" id="home_telephone" name="home_telephone" class="form-control phone-input" required>


                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-4">
                                        <label for="work_number">Work Number <span class="text-danger">*</span></label>
                                        <input type="text" id="work_number" name="work_number" class="form-control phone-input" required>
                                    </div>
                                </div>



                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="address">Street Address <span class="text-danger">*</span></label>
                                        <input type="text" name="address" class="form-control" placeholder="Street address" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="apartment">Apartment, Suite, etc <span class="text-danger">*</span></label>
                                        <input type="text" name="apartment" class="form-control" placeholder="Apartment, Suite, etc" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="city">City <span class="text-danger">*</span></label>
                                        <input type="text" name="city" class="form-control" placeholder="City name" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="province">State/Province <span class="text-danger">*</span></label>
                                        <input type="text" name="province" class="form-control" placeholder="State/Province" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="postal_code">Zip/Postal Code <span class="text-danger">*</span></label>
                                        <input type="text" name="postal_code" class="form-control" placeholder="Zip/Postal Code" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-4">
                                        <label for="country">Country of Residence <span class="text-danger">*</span></label>
                                        <select id="country" name="country" class="form-control form-select country" data-live-search="true" title="-- Select Country --" required>
                                            <option value="Bangladesh">Bangladesh</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="col-lg-12 mt-3">
                                    <div class="card">
                                        <div class="card-body text-dark">
                                            <h3>Documents<span class="text-danger">*</span></h3>
                                            <span class="ps-3">Please Provide:</span>
                                            <ol>
                                                <li>Proof of ID (Password, Birth Certificate, National Identity Card)</li>
                                                <li>Previous Academic Years Progress Report</li>
                                            </ol>

                                            <div class="row">
                                                <div class="col-lg-4 text-center">
                                                    <label class="form-label d-block">Proof Of Parents ID <span class="text-danger">*</span></label>
                                                    <!-- Hidden File Input -->
                                                    <input type="file" id="parentIdFile" class="d-none">
                                                    <!-- Custom Button -->
                                                    <label for="parentIdFile" class="btn form-control" style="background: #061E42;color:#FFF;">
                                                        Choose File <i class="fas fa-plus"></i>
                                                    </label>
                                                    <!-- File Name Preview -->
                                                    <div id="fileName" class="mt-2 text-muted">
                                                        No file chosen yet
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4 text-center">
                                                    <label class="form-label d-block">Proof Of Parents ID <span class="text-danger">*</span></label>
                                                    <!-- Hidden File Input -->
                                                    <input type="file" id="parentIdFile" class="d-none">
                                                    <!-- Custom Button -->
                                                    <label for="parentIdFile" class="btn form-control" style="background: #061E42;color:#FFF;">
                                                        Choose File <i class="fas fa-plus"></i>
                                                    </label>
                                                    <!-- File Name Preview -->
                                                    <div id="fileName" class="mt-2 text-muted">
                                                        No file chosen yet
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>



                            </div>

                        </div>
                    </div>


                </div>

            </div>
            <div class="row mt-3">
                <div class="col-lg-10 m-auto">
                    <button type="submit" class="btn custom-btn w-100">Continue</button>
                    <div class="text-center mt-4">
                        <a href="{{ route('form.step', 1) }}" class="text-light text-decoration-none"><i class="fa fa-arrow-left"></i> Go Back</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>



@endsection


@section('script')
<script>
    document.getElementById('parentIdFile').addEventListener('change', function(e) {
        let fileName = e.target.files.length ? e.target.files[0].name : "No file chosen yet";
        document.getElementById('fileName').textContent = fileName;
    });
</script>
@endsection