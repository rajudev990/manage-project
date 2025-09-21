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
            <div class="col-lg-4 step-one m-auto">
                <h3 class="text-center">Register at <br> Al-Rush International School</h3>
                <p class="text-center text-light" style="font-size: 24px;font-weight:500;">Select your school</p>
            </div>
        </div>
        <form action="{{ route('form.step.post', 1) }}" method="POST">
            @csrf
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4">
                    <div class="card p-4 mb-3 schoolbox active" onclick="$('.schoolbox').removeClass('active'); $(this).addClass('active');" style="background-color:#0c2a58;border-radius:24px;color:#FFF;cursor:pointer;">
                        <div class="card-body text-center">
                            <img src="{{ asset('frontend/assets/img/flag.png') }}" width="48" height="24" alt="" class="img-fluid">
                            <h3 class="py-3" style="font-size: 28px;font-weight: 600;">UK School</h3>
                            <p class="mb-0" style="color: #AE9A66;font-size:20px;font-weight:400;">Time zones:</p>
                            <p style="font-size:20px;font-weight:500;line-height: 28px;">GMT/BST, GMT+4, GMT+7</p>
                            <p style="font-weight: 400;font-size: 16px;line-height: 24px;">Follow the British curriculum from anywhere in the world</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card p-4 mb-3 schoolbox" onclick="$('.schoolbox').removeClass('active'); $(this).addClass('active');" style="background-color:#0c2a58;border-radius:24px;color:#FFF;cursor:pointer;">
                        <div class="card-body text-center">
                            <img src="{{ asset('frontend/assets/img/flag.png') }}" width="48" height="24" alt="" class="img-fluid">
                            <h3 class="py-3" style="font-size: 28px;font-weight: 600;">UK School</h3>
                            <p class="mb-0" style="color: #AE9A66;font-size:20px;font-weight:400;">Time zones:</p>
                            <p style="font-size:20px;font-weight:500;line-height: 28px;">GMT/BST, GMT+4, GMT+7</p>
                            <p style="font-weight: 400;font-size: 16px;line-height: 24px;">Follow the British curriculum from anywhere in the world</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4 m-auto">
                    <button type="submit" class="btn custom-btn w-100">Start Registration</button>
                </div>
            </div>
        </form>
    </div>
</section>



@endsection