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
        <div class="row mb-4">
            <div class="col-lg-6 step-four m-auto">
                <h3 class="text-center" style="color: #AE9A66;font-size:24px;font-weight:500;">Choose a Pricing Package That Suits You Best</h3>
            </div>
        </div>
        <form action="{{ route('form.step.post', 5) }}" method="POST">
            @csrf
            <div class="row d-flex justify-content-center">
                <!-- Parent Info -->
                <div class="col-lg-12">
                    <div class="card p-4 mb-3" style="background-color:#0c2a58;border-radius:16px;">
                        <div class="card-bodyr">
                            <h3 class="py-3" style="color:#FFF;font-size: 24px;font-weight: 600;text-align:center;">Parents Information</h3>

                            <div class="row">
                                <div class="col-lg-8  m-auto">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Name: </span>Mr Shamim Ahamed</p>
                                            <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Email: </span>example@gmail.com</p>
                                            <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Phone: </span>++441234567</p>
                                            <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Parent Type: </span>Father</p>
                                        </div>
                                        <div class="col-lg-5">
                                            <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Country: </span>Bangladesh</p>
                                            <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">City: </span>Dhaka</p>
                                            <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Postal Code: </span>1200</p>
                                            <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Address: </span>Mirpur Dhaka</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a class="btn text-center" style="background: #AE9A66;padding:15px 24px;border-radius:99px;font-size:16px;font-weight:600;color:#FFF;"><i class="fa fa-edit"></i> Edit</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- Parent Infor -->
                
                <!-- Multiple Student -->
                <div class="col-lg-6">
                    <div class="card p-4 mb-3" style="background-color:#0c2a58;border-radius:16px;">
                        <div class="card-bodyr">
                            <h3 class="py-3" style="color:#FFF;font-size: 24px;font-weight: 600;">Student 1 Information</h3>

                           <div class="row">
                                <div class="col-lg-6">
                                    <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Name: </span>Mr Shamim Ahamed</p>
                                    <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Date of Birth: </span>10 March 2025</p>
                                    <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Country: </span>Bangladesh</p>
                                    <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Start Date: </span>September 2025</p>
                                </div>
                                <div class="col-lg-6">
                                    <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Group: </span>Secondary KS-3</p>
                                    <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Year: </span>Year 7</p>
                                    <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Time Table: </span>UK Timetable</p>
                                    <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Package: </span>Core Package</p>
                                </div>

                                <div class="col-lg-12 mt-3">
                                    <div class="form-group mb-4">
                                        <label for="package" style="font-size:20px;font-weight:500;color: #AE9A66;">Core Subjects</label>
                                        <div>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">English</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">Mathmatics</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">Bangla</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">Science</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">History</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">English</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mb-4">
                                        <label for="package" style="font-size:20px;font-weight:500;color: #AE9A66;">Free Islamic Subject</label>
                                        <div>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">English</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">Mathmatics</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">Bangla</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">Science</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">History</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">English</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mb-4">
                                        <label for="package" style="font-size:20px;font-weight:500;color: #AE9A66;">Additional Subjects</label>
                                        <div>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">English</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">Mathmatics</span>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-4">
                                        <label for="package" style="font-size:20px;font-weight:500;color: #AE9A66;">Additional Hifdh/Hifz Curriculum</label>
                                        <div>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">English</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">Mathmatics</span>
                                           
                                        </div>
                                    </div>
                                </div>
                                


                            </div>
                            <div class="mt-3">
                                <a class="btn text-center" style="background: #AE9A66;padding:15px 24px;border-radius:99px;font-size:16px;font-weight:600;color:#FFF;"><i class="fa fa-edit"></i> Edit</a>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card p-4 mb-3" style="background-color:#0c2a58;border-radius:16px;">
                        <div class="card-bodyr">
                            <h3 class="py-3" style="color:#FFF;font-size: 24px;font-weight: 600;">Student 2 Information</h3>

                           <div class="row">
                                <div class="col-lg-6">
                                    <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Name: </span>Mr Shamim Ahamed</p>
                                    <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Date of Birth: </span>10 March 2025</p>
                                    <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Country: </span>Bangladesh</p>
                                    <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Start Date: </span>September 2025</p>
                                </div>
                                <div class="col-lg-6">
                                    <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Group: </span>Secondary KS-3</p>
                                    <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Year: </span>Year 7</p>
                                    <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Time Table: </span>UK Timetable</p>
                                    <p style="font-size: 20px;font-weight:400;color:#FFF;"><span style="color: #AE9A66;">Package: </span>Core Package</p>
                                </div>

                                <div class="col-lg-12 mt-3">
                                    <div class="form-group mb-4">
                                        <label for="package" style="font-size:20px;font-weight:500;color: #AE9A66;">Core Subjects</label>
                                        <div>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">English</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">Mathmatics</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">Bangla</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">Science</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">History</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">English</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mb-4">
                                        <label for="package" style="font-size:20px;font-weight:500;color: #AE9A66;">Free Islamic Subject</label>
                                        <div>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">English</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">Mathmatics</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">Bangla</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">Science</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">History</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">English</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group mb-4">
                                        <label for="package" style="font-size:20px;font-weight:500;color: #AE9A66;">Additional Subjects</label>
                                        <div>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">English</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">Mathmatics</span>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-4">
                                        <label for="package" style="font-size:20px;font-weight:500;color: #AE9A66;">Additional Hifdh/Hifz Curriculum</label>
                                        <div>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">English</span>
                                            <span class="badge mb-2" style="background-color:#183e77;border-radius:999px;padding:10px 15px;font-size:16px;color:#FFF;">Mathmatics</span>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a class="btn text-center" style="background: #AE9A66;padding:15px 24px;border-radius:99px;font-size:16px;font-weight:600;color:#FFF;"><i class="fa fa-edit"></i> Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Multiple Student -->
            </div>
            <div class="row mt-3">
                <div class="col-lg-6 m-auto">
                    <div class="d-flex justify-content-between mb-5">
                        <a href="#" class="btn custom-btn w-100 me-3" style="border-radius:8px;">View Terms and Condition</a>
                        <input type="text" class="form-control" placeholder="Your Signature here" style="background-color: #FFF !important;color:#000 !important;">
                    </div>

                    <!-- <div class="mb-5 text-light">
                        <input type="checkbox"> I have read and agree to the Terms & Conditions.
                    </div> -->

                    <!-- Terms Checkmark -->
                    <div class="form-check mb-4 ps-0">
                        <!-- Checkbox HTML -->
                        <label class="custom-check" style="color:#FFF;">
                            I have read and agree to the Terms & Conditions.
                            <input type="checkbox" required>
                            <span class="custom-checkmark"></span>
                        </label>
                    </div>


                    <button type="submit" class="btn custom-btn w-100">Continue</button>
                    <div class="text-center mt-4">
                        <a href="{{ route('form.step', 4) }}" class="text-light text-decoration-none"><i class="fa fa-arrow-left"></i> Go Back</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>



@endsection