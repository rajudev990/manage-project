@extends('student.app')

@section('student')

<section>
    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-lg-4 m-auto">
                <!-- Progress Header (Original Design) -->
                <div class="progress-container mb-4">
                    <h5 class="mb-0 text-light title">Estimated time remaining: 12 minutes</h5>
                    <div class="progress mt-2">
                        <div class="progress-bar" id="progressBar" role="progressbar" style="width: 10%;"></div>
                    </div>
                    <small id="progressText" class="text-light">90%</small>
                </div>
            </div>
        </div>

        <form action="{{ route('form.step.post',6) }}" method="POST">
            @csrf
            <div class="row d-flex justify-content-center">

                <div class="col-lg-6">
                    <div class="card p-5" style="background-color:#0c2a58;border-radius:16px;color:#FFF;">
                        <div class="card-body mb-5">

                            <h1 class="mb-5" style="background:#183E77;border-radius:16px;text-align:center;padding: 10px;">
                                <span style="font-size: 24px;font-weight:400;">Pay Al-Rushd Independence school</span>
                                <span class="badge" style="font-size:48px;font-weight:600;display: block;padding: 0px;">£15</span>
                            </h1>

                            <ul style="list-style-type: none;padding-left: 0px;margin-top:40px;padding-bottom: 60px;">
                                <li class="align-items-center border-bottom border-secondary d-flex justify-content-between mb-3 pb-3">
                                    <span>Registration Fee</span>
                                    <span>£15.00</span>
                                </li>
                                <li class="align-items-center border-bottom border-secondary d-flex justify-content-between mb-3 pb-3">
                                    <span>Student</span>
                                    <span>1</span>
                                </li>
                                <li class="align-items-center border-bottom border-secondary d-flex justify-content-between mb-3 pb-3">
                                    <span>Subtotal</span>
                                    <span>£15.00</span>
                                </li>
                                <li class="align-items-center d-flex justify-content-between mb-3 pb-3">
                                    <span>Total Payable Amount</span>
                                    <span>£15.00</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card p-5" style="background-color:#FFF;border-radius:16px;color:#000;">
                        <div class="card-bodyr">

                            <div class="row">
                                <!-- Email -->
                                <div class="mb-3 col-lg-12">
                                    <label class="form-label" style="font-size: 16px;color: #061E42;font-weight:400;">Email<span class="text-danger">*</span></label>
                                    <input style="background-color: #edf6ff !important;border: none !important;color:#000 !important;" type="email" class="form-control" id="email" placeholder="Enter your email" required>
                                </div>

                                <!-- Card Information -->
                                <div class="mb-3">
                                    <label class="form-label" style="font-size: 16px;color: #061E42;font-weight:400;">Card Information</label>
                                    <div id="card-element" class="form-control py-3"></div>
                                </div>

                                <!-- Card Holder Name -->
                                <div class="mb-3">
                                    <label class="form-label" style="font-size: 16px;color: #061E42;font-weight:400;">Card Holder Name</label>
                                    <input style="background-color: #edf6ff !important;border: none !important;color:#000 !important;" type="text" class="form-control" id="card-holder-name" placeholder="Enter name on card" required>
                                </div>

                                <div class="col-lg-12">
                                    <label class="form-label" style="font-size: 16px;color: #061E42;font-weight:400;">Country or Region</label>
                                </div>
                                <!-- Country or Region -->
                                <div class="mb-3 col-lg-6">
                                    <select style="background-color: #edf6ff !important;border: none !important;color:#000 !important;" class="form-select" id="country" required>
                                        <option value="">Select Country</option>
                                        <option value="US">United States</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="IN">India</option>
                                        <option value="CA">Canada</option>
                                        <option value="AU">Australia</option>
                                    </select>
                                </div>

                                <!-- Postal Code -->
                                <div class="mb-3 col-lg-6">
                                    <input style="background-color: #edf6ff !important;border: none !important;color:#000 !important;" type="text" class="form-control" id="postal-code" placeholder="postal code" required>
                                </div>

                            </div>


                            <!-- Terms Checkmark -->
                            <div class="form-check mb-4 ps-0">
                                <!-- Checkbox HTML -->
                                <label class="custom-check">
                                    I agree to the <a href="#" style="color:#ae9a66; text-decoration:none;">Terms & Conditions</a>
                                    <input type="checkbox" required>
                                    <span class="custom-checkmark"></span>
                                </label>
                            </div>

                            <!-- Error Message -->
                            <div id="card-errors" class="text-danger mb-3" role="alert"></div>

                            <div class="text-center mt-5">
                                <button type="submit" class="btn custom-btn w-100">Pay Now</button>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-lg-4 m-auto">
                    <div class="text-center mt-4">
                        <a href="{{ route('form.step', 5) }}" class="text-light text-decoration-none"><i class="fa fa-arrow-left"></i> Go Back</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>



@endsection

@section('script')
<!-- Stripe JS -->
<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe("your-publishable-key-here"); // তোমার Stripe publishable key বসাও
    const elements = stripe.elements();

    const cardElement = elements.create('card', {
        hidePostalCode: true,
        style: {
            base: {
                fontSize: '16px',
                color: '#32325d',
                '::placeholder': {
                    color: '#a0aec0'
                },
            },
            invalid: {
                color: '#e3342f'
            }
        }
    });

    cardElement.mount('#card-element');
</script>
@endsection