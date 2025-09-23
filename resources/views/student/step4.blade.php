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
                    <small id="progressText" class="text-light">8%</small>
                </div>
            </div>
        </div>
        <form action="{{ route('form.step.post', 4) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row d-flex justify-content-center">
                <div class="col-lg-11">
                    <div id="studentsContainer">
                        <div class="card p-4 mb-3 " style="background-color:#0c2a58;border-radius:24px;color:#FFF;">
                            <div class="card-body">
                                <h3 class="text-center mb-5" style="color: #AE9A66;font-size: 24px;font-weight: 600;">Additional Information</h3>
                                <!-- Row -->
                                <div class="row">


                                    <div class="col-md-7">
                                        <label class="form-label d-block">
                                            An Education & Health Care plan (EHCP) is a formal document
                                            detailing a child's learning difficulties and the help they will be
                                            given. Does the child have an Education Health Care Plan?
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="d-flex gap-3">
                                            <div>
                                                <input type="radio" class="custom-radio" id="ehcp_yes" name="ehcp" value="1">
                                                <label for="ehcp_yes" class="text-light">Yes</label>
                                            </div>
                                            <div>
                                                <input type="radio" class="custom-radio" id="ehcp_no" name="ehcp" value="0">
                                                <label for="ehcp_no" class="text-light">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <label class="form-label d-block w-492px h-63">
                                            Permanent Exclusions : Has this child been permanently excluded (expelled)
                                            from their previous school?
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="d-flex gap-3">
                                            <div>
                                                <input type="radio" class="custom-radio" id="ehcp_yes" name="ehcp" value="1">
                                                <label for="ehcp_yes" class="text-light">Yes</label>
                                            </div>
                                            <div>
                                                <input type="radio" class="custom-radio" id="ehcp_no" name="ehcp" value="0">
                                                <label for="ehcp_no" class="text-light">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="col-md-8 text-light mb-0 mt-3">
                                        <label class="form-label">
                                            Fair Access Protocol: (Checkboxes option for the list below) -
                                            Does the child fall under any of the below listed categories of the Fair Access Protocol?
                                            <span class="text-danger">*</span>
                                        </label>
                                    </p>

                                    <div class="col-md-12 mt-3">
                                        <div>
                                            <input type="radio" class="custom-radio" id="ehcp_no" name="ehcp" value="0">
                                            <label for="ehcp_no" class="text-light">Children subject to a child in need plan or a child protection plan within the last 12 months</label>
                                        </div>
                                        <div>
                                            <input class="custom-radio" type="radio" id="ehcp_no" name="ehcp" value="0">
                                            <label for="ehcp_no" class="text-light">Children living in a refuge</label>
                                        </div>
                                        <div>
                                            <input class="custom-radio" type="radio" id="ehcp_no" name="ehcp" value="0">
                                            <label for="ehcp_no" class="text-light">Children from the criminal justice system</label>
                                        </div>
                                        <div>
                                            <input class="custom-radio" type="radio" id="ehcp_no" name="ehcp" value="0">
                                            <label for="ehcp_no" class="text-light">Children who are carers</label>
                                        </div>
                                        <div>
                                            <input class="custom-radio" type="radio" id="ehcp_no" name="ehcp" value="0">
                                            <label for="ehcp_no" class="text-light">Children who are homeless</label>
                                        </div>
                                        <div>
                                            <input class="custom-radio" type="radio" id="ehcp_no" name="ehcp" value="0">
                                            <label for="ehcp_no" class="text-light">Children in formal kinship care arrangements</label>
                                        </div>
                                        <div>
                                            <input class="custom-radio" type="radio" id="ehcp_no" name="ehcp" value="0">
                                            <label for="ehcp_no" class="text-light">Children of, or who are, Gypsies, Roma or Travellers</label>
                                        </div>
                                        <div>
                                            <input class="custom-radio" type="radio" id="ehcp_no" name="ehcp" value="0">
                                            <label for="ehcp_no" class="text-light">Children who are refugees or asylum seekers</label>
                                        </div>
                                        <div>
                                            <input class="custom-radio" type="radio" id="ehcp_no" name="ehcp" value="0">
                                            <label for="ehcp_no" class="text-light">Children who have been out of education for four weeks or more</label>
                                        </div>
                                        <div>
                                            <input class="custom-radio" type="radio" id="ehcp_no" name="ehcp" value="0">
                                            <label for="ehcp_no" class="text-light">None</label>
                                        </div>
                                        <div>
                                            <input class="custom-radio" type="radio" id="ehcp_no" name="ehcp" value="0">
                                            <label for="ehcp_no" class="text-light">Other</label>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label for="form-label">If any of these apply, provide the supporting local authority</label>
                                                <input name="gender" id="gender" class="form-control" placeholder="Local Authority">
                                            </div>
                                        </div>


                                        <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label for="form-label">Provide the name of the assigned social worker*</label>
                                                <input name="gender" id="gender" class="form-control" placeholder="Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-md-6">
                                            <label class="form-label d-block w-492px h-63">
                                                Special Educational Needs and Disabilities: Is this child on the special educational needs and disabilities code of practice
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="d-flex gap-3">
                                                <div>
                                                    <input type="radio" class="custom-radio" id="ehcp_yes" name="ehcp" value="1">
                                                    <label for="ehcp_yes" class="text-light">Yes</label>
                                                </div>
                                                <div>
                                                    <input type="radio" class="custom-radio" id="ehcp_no" name="ehcp" value="0">
                                                    <label for="ehcp_no" class="text-light">No</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label class="form-label d-block w-492px h-63">
                                                Medical Conditions: Does the child have any long term medical conditions? 
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="d-flex gap-3">
                                                <div>
                                                    <input type="radio" class="custom-radio" id="ehcp_yes" name="ehcp" value="1">
                                                    <label for="ehcp_yes" class="text-light">Yes</label>
                                                </div>
                                                <div>
                                                    <input type="radio" class="custom-radio" id="ehcp_no" name="ehcp" value="0">
                                                    <label for="ehcp_no" class="text-light">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-md-6">
                                            <label class="form-label d-block w-492px h-63">
                                                Direct Placements: Has the child been directed to an Alternative Provision to improve their behaviour?
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="d-flex gap-3">
                                                <div>
                                                    <input type="radio" class="custom-radio" id="ehcp_yes" name="ehcp" value="1">
                                                    <label for="ehcp_yes" class="text-light">Yes</label>
                                                </div>
                                                <div>
                                                    <input type="radio" class="custom-radio" id="ehcp_no" name="ehcp" value="0">
                                                    <label for="ehcp_no" class="text-light">No</label>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="col-lg-6">
                                            <div class="form-group mb-4">
                                                <label for="form-label">Attendance in previous school: Attendance percentage</label>
                                                <input name="gender" id="gender" class="form-control" placeholder="Percentage">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-4 mt-2">
                                            <label for="">Consent <span class="text-danger">*</span></label><br>
                                            <input type="checkbox" class="custom-chekhbox">
                                            <span for="package" class="text-secondary">I have read and understood your admission process and agree with the Terms and Conditions of Al-Rushd Independent School.</span><br>

                                            <div class="mt-3">
                                                Please check that all information is correct before submitting it.
                                           </div>

                                        </div>
                                    </div>


                                </div>
                                <!-- End Rrow -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt-3 mb-5">
                <div class="col-lg-11 m-auto">

                    <button type="submit" class="btn custom-btn w-100">Continue</button>
                    <div class="text-center mt-4">
                        <a href="{{ route('form.step', 3) }}" class="text-light text-decoration-none"><i class="fa fa-arrow-left"></i> Go Back</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>



@endsection


@section('script')
<script>

</script>


@endsection