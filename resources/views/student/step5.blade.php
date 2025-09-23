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
                <div class="col-lg-3">
                    <div class="card p-4 mb-3 schoolbox active" style="background-color:#0c2a58;border-radius:24px;color:#FFF;cursor:pointer;">
                        <div class="card-bodyr">
                            <h3 class="py-3" style="color:#AE9A66;font-size: 20px;font-weight: 600;">Every Plan Comes With</h3>

                            <ul style="list-style-type: none;padding-left: 0px;">
                                <li class="mb-3">
                                    <img width="16" height="16" src="{{ asset('frontend/assets/img/check.png') }}" alt="" class="img-fluid">
                                     <span style="font-size: 16px;font-weight:400;color:#FFF;">Application Processing Fee:  £15</span>
                                </li>
                                <li class="mb-3">
                                    <img width="16" height="16" src="{{ asset('frontend/assets/img/check.png') }}" alt="" class="img-fluid">
                                     <span style="font-size: 16px;font-weight:400;color:#FFF;">Admission Fee:  £350</span>
                                </li>
                                <li class="mb-3">
                                    <img width="16" height="16" src="{{ asset('frontend/assets/img/check.png') }}" alt="" class="img-fluid">
                                     <span style="font-size: 16px;font-weight:400;color:#FFF;">Deposit: £100 (refundable at theend of the academic year)</span>
                                </li>
                                <li class="mb-3">
                                    <img width="16" height="16" src="{{ asset('frontend/assets/img/check.png') }}" alt="" class="img-fluid">
                                     <span style="font-size: 16px;font-weight:400;color:#FFF;">Includes 5 Islamic Subjects (Saving you £500/year)</span>
                                </li>
                                <li class="mb-3">
                                    <img width="16" height="16" src="{{ asset('frontend/assets/img/check.png') }}" alt="" class="img-fluid">
                                     <span style="font-size: 16px;font-weight:400;color:#FFF;">Total 13 Subjects</span>
                                </li>
                            </ul>

                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card p-4 mb-3 schoolbox active" onclick="$('.schoolbox').removeClass('active'); $(this).addClass('active');" style="background-color:#02142F;border-radius:24px;color:#FFF;cursor:pointer;">
                        <div class="card-bodyr">
                            <h3 class="py-3 text-center" style="color:#AE9A66;font-size: 24px;font-weight: 600;">Monthly Payment</h3>

                            <h1 class="" style="background: #061E42;padding:8px 60px;border-radius:8px;text-align:center;font-size:32px;font-weight:600;">
                                £282
                            </h1>

                            <ul style="list-style-type: none;padding-left: 0px;margin-top:40px;">
                                <li class="align-items-center d-flex mb-3">
                                    <img width="20" height="20" src="{{ asset('frontend/assets/img/check.png') }}" alt="" class="img-fluid">
                                     <span style="font-size: 18px;margin-left: 10px;font-weight:400;color:#FFF;">10 Monthly Instalments</span>
                                </li>
                            </ul>

                            <div class="text-center mt-5">
                                <p class="btn text-center" style="background: #AE9A66;padding:15px 24px;border-radius:99px;font-size:16px;font-weight:600;color:#FFF;">Select</p>
                            </div>

                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card p-4 mb-3 schoolbox" onclick="$('.schoolbox').removeClass('active'); $(this).addClass('active');" style="background-color:#02142F;border-radius:24px;color:#FFF;cursor:pointer;">
                        <div class="card-bodyr">
                            <h3 class="py-3 text-center" style="color:#AE9A66;font-size: 24px;font-weight: 600;">Termly Payment</h3>

                            <h1 class="align-items-center d-flex justify-content-center" style="background: #061E42;padding:8px 0px;border-radius:8px;text-align:center;font-size:32px;font-weight:600;">
                                £282 <del class="ms-2" style="color: #AE9A66;font-size:20px;">£940</del> 
                                <span class="badge ms-4" style="background: #183E77;font-size:12px;padding:10px 15px;border-radius:99px;">Save £28</span>
                            </h1>

                            <ul style="list-style-type: none;padding-left: 0px;margin-top:40px;">
                                <li class="align-items-center d-flex mb-3">
                                    <img width="20" height="20" src="{{ asset('frontend/assets/img/check.png') }}" alt="" class="img-fluid">
                                     <span style="font-size: 18px;margin-left: 10px;font-weight:400;color:#FFF;">3 Instalments</span>
                                </li>
                            </ul>

                            <div class="text-center mt-5">
                                <p class="btn text-center" style="background: #183E77;padding:15px 24px;border-radius:99px;font-size:16px;font-weight:600;color:#FFF;">Select</p>
                            </div>

                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card p-4 mb-3 schoolbox" onclick="$('.schoolbox').removeClass('active'); $(this).addClass('active');" style="background-color:#02142F;border-radius:24px;color:#FFF;cursor:pointer;">
                        <div class="card-bodyr">
                            <h3 class="py-3 text-center" style="color:#AE9A66;font-size: 24px;font-weight: 600;">Annual Contract</h3>

                           <h1 class="align-items-center d-flex justify-content-center" style="background: #061E42;padding:8px 0px;border-radius:8px;text-align:center;font-size:32px;font-weight:600;">
                                £282 <del class="ms-2" style="color: #AE9A66;font-size:20px;">£940</del> 
                                <span class="badge ms-4" style="background: #183E77;font-size:12px;padding:10px 15px;border-radius:99px;">Save £28</span>
                            </h1>

                            <ul style="list-style-type: none;padding-left: 0px;margin-top:40px;">
                                <li class="align-items-center d-flex mb-3">
                                    <img width="20" height="20" src="{{ asset('frontend/assets/img/check.png') }}" alt="" class="img-fluid">
                                     <span style="font-size: 18px;margin-left: 10px;font-weight:400;color:#FFF;">1 Year Instalment</span>
                                </li>
                            </ul>

                            <div class="text-center mt-5">
                                <p class="btn text-center" style="background:#183E77;padding:15px 24px;border-radius:99px;font-size:16px;font-weight:600;color:#FFF;">Select</p>
                            </div>

                            
                        </div>
                    </div>
                </div>

               
            </div>
            <div class="row mt-3">
                <div class="col-lg-4 m-auto">
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