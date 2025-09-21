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
        <form action="{{ route('form.step.post', 3) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <div id="studentsContainer">
                        <div class="card p-4 mb-3 " style="background-color:#0c2a58;border-radius:24px;color:#FFF;">
                            <div class="card-body">
                                <h3 class="text-center mb-5" style="color: #AE9A66;font-size: 24px;font-weight: 600;">Tell us about your first child</h3>
                                <div class="row">
                                    
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="fname">Student’s First Name<span class="text-danger">*</span></label>
                                            <input type="text" name="fname" class="form-control" placeholder="First name here" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="lname">Student’s Last Name<span class="text-danger">*</span></label>
                                            <input type="text" name="lname" class="form-control" placeholder="Last name here" required>
                                        </div>
                                    </div>

                                    

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="dob">Student’s Date of Birth<span class="text-danger">*</span></label>
                                            <input type="date" name="dob" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="gender">Gender<span class="text-danger">*</span></label>
                                            <select name="gender" id="gender" class="form-control form-select" required>
                                                <option value="">-- Select --</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="gender">Nationality<span class="text-danger">*</span></label>
                                            <select name="gender" id="gender" class="form-control form-select" required>
                                                <option value="">-- Select --</option>
                                                <option value="Bangladeshi">Bangladeshi</option>
                                                <option value="Indian">Indian</option>
                                                <option value="Pakistani">Pakistani</option>
                                                <option value="Nepali">Nepali</option>
                                                <option value="Sri Lankan">Sri Lankan</option>
                                                <option value="Bhutanese">Bhutanese</option>
                                                <option value="Maldivian">Maldivian</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="gender">Desired Start Date<span class="text-danger">*</span></label>
                                            <select name="gender" id="gender" class="form-control form-select" required>
                                                <option value="">-- Select --</option>
                                                <option value="12/12/2025">12/12/2025</option>
                                                <option value="12/12/2026">12/12/2026</option>
                                                <option value="12/12/2027">12/12/2027</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="group">Select Your Group<span class="text-danger">*</span></label>
                                            <select name="group" id="group" class="form-control form-select" required>
                                                <option value="">-- Select --</option>
                                                <option value="Group-1">Group-1</option>
                                                <option value="Group-2">"Group-2</option>
                                                <option value="Group-3">"Group-3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label for="year">Select Year<span class="text-danger">*</span></label>
                                            <select name="year" id="year" class="form-control form-select" required>
                                                <option value="">-- Select --</option>
                                                <option value="Year-1">Year-1</option>
                                                <option value="Year-2">"Year-2</option>
                                                <option value="Year-3">"Year-3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-4">
                                            <label for="package">Choose Your Package<span class="text-danger">*</span></label>
                                            <select name="package" id="package" class="form-control form-select" required>
                                                <option value="">-- Select --</option>
                                                <option value="Package-1">Package-1</option>
                                                <option value="Package-2">"Package-2</option>
                                                <option value="Package-3">"Package-3</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group mb-4">
                                            <label for="package">Your Core Subjects</label>
                                            <div>
                                                <span class="badge fs-5" style="background-color:#AE9A66;">English</span>
                                                <span class="badge fs-5" style="background-color:#AE9A66;">Mathmatics</span>
                                                <span class="badge fs-5" style="background-color:#AE9A66;">Bangla</span>
                                                <span class="badge fs-5" style="background-color:#AE9A66;">Science</span>
                                                <span class="badge fs-5" style="background-color:#AE9A66;">History</span>
                                                <span class="badge fs-5" style="background-color:#AE9A66;">English</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-4">
                                            <label for="package">Free 6 Islamic Subject Included</label>
                                            <div>
                                                <span class="badge fs-5" style="background-color:#AE9A66;">English</span>
                                                <span class="badge fs-5" style="background-color:#AE9A66;">Mathmatics</span>
                                                <span class="badge fs-5" style="background-color:#AE9A66;">Bangla</span>
                                                <span class="badge fs-5" style="background-color:#AE9A66;">Science</span>
                                                <span class="badge fs-5" style="background-color:#AE9A66;">History</span>
                                                <span class="badge fs-5" style="background-color:#AE9A66;">English</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-4">
                                            <label for="package">Additional Hifdh/Hifz Curriculum</label>
                                            <div>
                                                <span class="badge fs-5" style="background-color:#AE9A66;">English</span>
                                                <span class="badge fs-5" style="background-color:#AE9A66;">Mathmatics</span>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group mb-4">
                                            <input type="checkbox">
                                            <label for="package">Add the optional Hifdh Programme for an £840 per year.</label>
                                            
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
            </div>
            <div class="row mt-3">
                <div class="col-lg-10 m-auto">
                    <p id="addMore" class="btn w-100 py-3" style="background: #183E77;color:#FFF;cursor:pointer;">Add More Students <i class="fa fa-plus ms-3"></i></p>
                    <button type="submit" class="btn custom-btn w-100">Continue</button>
                    <div class="text-center mt-4">
                        <a href="{{ route('form.step', 2) }}" class="text-light text-decoration-none"><i class="fa fa-arrow-left"></i> Go Back</a>
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
<script>
$(document).ready(function() {

    // Template for new student card
    function getStudentCard(index) {
        return `
        <div class="card p-4 mb-3 student-card" style="background-color:#0c2a58;border-radius:24px;color:#FFF; position: relative;">
            <div class="card-body">
                <button type="button" class="btn btn-danger btn-sm remove-card" style="position: absolute; top: 15px; right: 15px;">
                    Remove <i class="fa fa-times"></i>
                </button>
                <h3 class="text-center mb-5" style="color: #AE9A66;font-size: 24px;font-weight: 600;">Tell us about your child ${index}</h3>
               <div class="row">
                                    
                    <div class="col-lg-6">
                        <div class="form-group mb-4">
                            <label for="fname">Student’s First Name<span class="text-danger">*</span></label>
                            <input type="text" name="fname" class="form-control" placeholder="First name here" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-4">
                            <label for="lname">Student’s Last Name<span class="text-danger">*</span></label>
                            <input type="text" name="lname" class="form-control" placeholder="Last name here" required>
                        </div>
                    </div>

                    

                    <div class="col-lg-6">
                        <div class="form-group mb-4">
                            <label for="dob">Student’s Date of Birth<span class="text-danger">*</span></label>
                            <input type="date" name="dob" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-4">
                            <label for="gender">Gender<span class="text-danger">*</span></label>
                            <select name="gender" id="gender" class="form-control form-select" required>
                                <option value="">-- Select --</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-4">
                            <label for="gender">Nationality<span class="text-danger">*</span></label>
                            <select name="gender" id="gender" class="form-control form-select" required>
                                <option value="">-- Select --</option>
                                <option value="Bangladeshi">Bangladeshi</option>
                                <option value="Indian">Indian</option>
                                <option value="Pakistani">Pakistani</option>
                                <option value="Nepali">Nepali</option>
                                <option value="Sri Lankan">Sri Lankan</option>
                                <option value="Bhutanese">Bhutanese</option>
                                <option value="Maldivian">Maldivian</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-4">
                            <label for="gender">Desired Start Date<span class="text-danger">*</span></label>
                            <select name="gender" id="gender" class="form-control form-select" required>
                                <option value="">-- Select --</option>
                                <option value="12/12/2025">12/12/2025</option>
                                <option value="12/12/2026">12/12/2026</option>
                                <option value="12/12/2027">12/12/2027</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-4">
                            <label for="group">Select Your Group<span class="text-danger">*</span></label>
                            <select name="group" id="group" class="form-control form-select" required>
                                <option value="">-- Select --</option>
                                <option value="Group-1">Group-1</option>
                                <option value="Group-2">"Group-2</option>
                                <option value="Group-3">"Group-3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-4">
                            <label for="year">Select Year<span class="text-danger">*</span></label>
                            <select name="year" id="year" class="form-control form-select" required>
                                <option value="">-- Select --</option>
                                <option value="Year-1">Year-1</option>
                                <option value="Year-2">"Year-2</option>
                                <option value="Year-3">"Year-3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-4">
                            <label for="package">Choose Your Package<span class="text-danger">*</span></label>
                            <select name="package" id="package" class="form-control form-select" required>
                                <option value="">-- Select --</option>
                                <option value="Package-1">Package-1</option>
                                <option value="Package-2">"Package-2</option>
                                <option value="Package-3">"Package-3</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="form-group mb-4">
                            <label for="package">Your Core Subjects</label>
                            <div>
                                <span class="badge fs-5" style="background-color:#AE9A66;">English</span>
                                <span class="badge fs-5" style="background-color:#AE9A66;">Mathmatics</span>
                                <span class="badge fs-5" style="background-color:#AE9A66;">Bangla</span>
                                <span class="badge fs-5" style="background-color:#AE9A66;">Science</span>
                                <span class="badge fs-5" style="background-color:#AE9A66;">History</span>
                                <span class="badge fs-5" style="background-color:#AE9A66;">English</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-4">
                            <label for="package">Free 6 Islamic Subject Included</label>
                            <div>
                                <span class="badge fs-5" style="background-color:#AE9A66;">English</span>
                                <span class="badge fs-5" style="background-color:#AE9A66;">Mathmatics</span>
                                <span class="badge fs-5" style="background-color:#AE9A66;">Bangla</span>
                                <span class="badge fs-5" style="background-color:#AE9A66;">Science</span>
                                <span class="badge fs-5" style="background-color:#AE9A66;">History</span>
                                <span class="badge fs-5" style="background-color:#AE9A66;">English</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group mb-4">
                            <label for="package">Additional Hifdh/Hifz Curriculum</label>
                            <div>
                                <span class="badge fs-5" style="background-color:#AE9A66;">English</span>
                                <span class="badge fs-5" style="background-color:#AE9A66;">Mathmatics</span>
                            
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <div class="form-group mb-4">
                            <input type="checkbox">
                            <label for="package">Add the optional Hifdh Programme for an £840 per year.</label>
                            
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
        `;
    }

    let studentCount = 1; // First child already exists

    // Add More Button Click
    $("#addMore").click(function() {
        studentCount++;
        $("#studentsContainer").append(getStudentCard(studentCount));
    });

    // Remove card
    $(document).on("click", ".remove-card", function() {
        $(this).closest(".student-card").remove();
    });

});
</script>

@endsection