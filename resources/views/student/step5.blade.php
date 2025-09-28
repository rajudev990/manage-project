```blade
@extends('student.app')

@section('student')

<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <!-- Progress Header -->
                <div class="progress-container mb-4">
                    <h5 class="mb-0 text-light title">Estimated time remaining: 12 minutes</h5>
                    <div class="progress mt-2">
                        <div class="progress-bar" id="progressBar" role="progressbar" style="width: 50%;"></div>
                    </div>
                    <small id="progressText" class="text-light">50%</small>
                </div>
            </div>
        </div>
        
        <form action="{{ route('form.step.post', 5) }}" method="POST">
            @csrf

            <div class="row mb-4">
                <div class="col-lg-6 step-four m-auto">
                    <h3 class="text-center" style="color: #AE9A66;font-size:24px;font-weight:500;">
                        Choose a Pricing Package That Suits 
                        <span style="color:#fff;">
                            {{ $student->fname ?? '' }}
                        </span> 
                        Best
                    </h3>
                    <p class="text-center text-light">
                        {{ $student->group->name ?? '' }}
                    </p>
                </div>
            </div>
            
            <div class="row d-flex justify-content-center">
                <!-- Every Plan -->
                <div class="col-lg-3">
                    <div class="card p-4 mb-3 schoolbox active" style="background-color:#0c2a58;border-radius:24px;color:#FFF;cursor:pointer;">
                        <div class="card-bodyr">
                            <h3 class="py-3" style="color:#AE9A66;font-size: 20px;font-weight: 600;">Every Plan Comes With</h3>
                            <ul style="list-style-type: none;padding-left: 0px;">
                                @if($plan->plan_text_one)
                                    <li class="mb-3">
                                        <img width="16" height="16" src="{{ asset('frontend/assets/img/check.png') }}">
                                        <span style="font-size: 16px;font-weight:400;color:#FFF;">{{ $plan->plan_text_one }}</span>
                                    </li>
                                @endif
                                @if($plan->plan_text_two)
                                    <li class="mb-3">
                                        <img width="16" height="16" src="{{ asset('frontend/assets/img/check.png') }}">
                                        <span style="font-size: 16px;font-weight:400;color:#FFF;">{{ $plan->plan_text_two }}</span>
                                    </li>
                                @endif
                                @if($plan->plan_text_three)
                                    <li class="mb-3">
                                        <img width="16" height="16" src="{{ asset('frontend/assets/img/check.png') }}">
                                        <span style="font-size: 16px;font-weight:400;color:#FFF;">{{ $plan->plan_text_three }}</span>
                                    </li>
                                @endif
                                @if($plan->plan_text_four)
                                    <li class="mb-3">
                                        <img width="16" height="16" src="{{ asset('frontend/assets/img/check.png') }}">
                                        <span style="font-size: 16px;font-weight:400;color:#FFF;">{{ $plan->plan_text_four }}</span>
                                    </li>
                                @endif
                                @if($plan->plan_text_five)
                                    <li class="mb-3">
                                        <img width="16" height="16" src="{{ asset('frontend/assets/img/check.png') }}">
                                        <span style="font-size: 16px;font-weight:400;color:#FFF;">{{ $plan->plan_text_five }}</span>
                                    </li>
                                @endif
                                @if($plan->plan_text_six)
                                    <li class="mb-3">
                                        <img width="16" height="16" src="{{ asset('frontend/assets/img/check.png') }}">
                                        <span style="font-size: 16px;font-weight:400;color:#FFF;">{{ $plan->plan_text_six }}</span>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Monthly -->
                <div class="col-lg-3">
                    <div class="card p-4 mb-3 schoolbox active" onclick="$('.schoolbox').removeClass('active'); $(this).addClass('active');" style="background-color:#02142F;border-radius:24px;color:#FFF;cursor:pointer;">
                        <div class="card-bodyr">
                            <h3 class="py-3 text-center" style="color:#AE9A66;font-size: 24px;font-weight: 600;">Monthly Payment</h3>
                            <h1 style="background: #061E42;padding:8px 60px;border-radius:8px;text-align:center;font-size:32px;font-weight:600;">
                                £{{ $plan->m_regular_price }} 
                                @if($plan->m_discount_price)
                                    <del class="ms-2" style="color: #AE9A66;font-size:20px;">£{{ $plan->m_discount_price }}</del>
                                @endif
                                @if($plan->m_discount)
                                    <span class="badge ms-4" style="background: #183E77;font-size:12px;padding:10px 15px;border-radius:99px;">
                                        Save £{{ $plan->m_discount }}
                                    </span>
                                @endif
                            </h1>

                            <ul style="list-style-type: none;padding-left: 0px;margin-top:40px;">
                                @foreach(range(1,6) as $i)
                                    @php $field = 'm_list_'.$i; @endphp
                                    @if($plan->$field)
                                        <li class="align-items-center d-flex mb-3">
                                            <img width="20" height="20" src="{{ asset('frontend/assets/img/check.png') }}">
                                            <span style="font-size: 18px;margin-left: 10px;font-weight:400;color:#FFF;">
                                                {{ $plan->$field }}
                                            </span>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>

                            <div class="text-center mt-5">
                                <button type="submit" name="package" value="monthly" class="btn text-center" style="background: #AE9A66;padding:15px 24px;border-radius:99px;font-size:16px;font-weight:600;color:#FFF;">
                                    Select
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Termly -->
                <div class="col-lg-3">
                    <div class="card p-4 mb-3 schoolbox" onclick="$('.schoolbox').removeClass('active'); $(this).addClass('active');" style="background-color:#02142F;border-radius:24px;color:#FFF;cursor:pointer;">
                        <div class="card-bodyr">
                            <h3 class="py-3 text-center" style="color:#AE9A66;font-size: 24px;font-weight: 600;">Termly Payment</h3>
                            <h1 class="align-items-center d-flex justify-content-center" style="background: #061E42;padding:8px;border-radius:8px;text-align:center;font-size:32px;font-weight:600;">
                                £{{ $plan->a_regular_price }}
                                @if($plan->a_discount_price)
                                    <del class="ms-2" style="color: #AE9A66;font-size:20px;">£{{ $plan->a_discount_price }}</del>
                                @endif
                                @if($plan->a_discount)
                                    <span class="badge ms-4" style="background: #183E77;font-size:12px;padding:10px 15px;border-radius:99px;">
                                        Save £{{ $plan->a_discount }}
                                    </span>
                                @endif
                            </h1>

                            <ul style="list-style-type: none;padding-left: 0px;margin-top:40px;">
                                @foreach(range(1,6) as $i)
                                    @php $field = 'a_list_'.$i; @endphp
                                    @if($plan->$field)
                                        <li class="align-items-center d-flex mb-3">
                                            <img width="20" height="20" src="{{ asset('frontend/assets/img/check.png') }}">
                                            <span style="font-size: 18px;margin-left: 10px;font-weight:400;color:#FFF;">
                                                {{ $plan->$field }}
                                            </span>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>

                            <div class="text-center mt-5">
                                <button type="submit" name="package" value="termly" class="btn text-center" style="background: #183E77;padding:15px 24px;border-radius:99px;font-size:16px;font-weight:600;color:#FFF;">
                                    Select
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Annual -->
                <div class="col-lg-3">
                    <div class="card p-4 mb-3 schoolbox" onclick="$('.schoolbox').removeClass('active'); $(this).addClass('active');" style="background-color:#02142F;border-radius:24px;color:#FFF;cursor:pointer;">
                        <div class="card-bodyr">
                            <h3 class="py-3 text-center" style="color:#AE9A66;font-size: 24px;font-weight: 600;">Annual Contract</h3>
                            <h1 class="align-items-center d-flex justify-content-center" style="background: #061E42;padding:8px;border-radius:8px;text-align:center;font-size:32px;font-weight:600;">
                                £{{ $plan->t_regular_price }}
                                @if($plan->t_discount_price)
                                    <del class="ms-2" style="color: #AE9A66;font-size:20px;">£{{ $plan->t_discount_price }}</del>
                                @endif
                                @if($plan->t_discount)
                                    <span class="badge ms-4" style="background: #183E77;font-size:12px;padding:10px 15px;border-radius:99px;">
                                        Save £{{ $plan->t_discount }}
                                    </span>
                                @endif
                            </h1>

                            <ul style="list-style-type: none;padding-left: 0px;margin-top:40px;">
                                @foreach(range(1,6) as $i)
                                    @php $field = 't_list_'.$i; @endphp
                                    @if($plan->$field)
                                        <li class="align-items-center d-flex mb-3">
                                            <img width="20" height="20" src="{{ asset('frontend/assets/img/check.png') }}">
                                            <span style="font-size: 18px;margin-left: 10px;font-weight:400;color:#FFF;">
                                                {{ $plan->$field }}
                                            </span>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>

                            <div class="text-center mt-5">
                                <button type="submit" name="package" value="annual" class="btn text-center" style="background:#183E77;padding:15px 24px;border-radius:99px;font-size:16px;font-weight:600;color:#FFF;">
                                    Select
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Continue -->
            <div class="row mt-3">
                <div class="col-lg-4 m-auto">
                    <button type="submit" class="btn custom-btn w-100">Continue</button>
                    <div class="text-center mt-4">
                        <a href="{{ route('form.step', 4) }}" class="text-light text-decoration-none">
                            <i class="fa fa-arrow-left"></i> Go Back
                        </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection