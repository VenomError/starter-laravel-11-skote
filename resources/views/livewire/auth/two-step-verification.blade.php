<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mb-5 text-muted">
                    <a href="{{ route('login') }}" class="d-block auth-logo">
                        <x-image src="assets/images/logo-dark.png" alt="" height="20" class="auth-logo-dark mx-auto" />
                        <x-image src="assets/images/logo-light.png" alt="" height="20"
                            class="auth-logo-light mx-auto" />
                    </a>
                    <p class="mt-3">Responsive Bootstrap 5 Admin Dashboard</p>
                </div>
            </div>
        </div>
        <!-- end row -->
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">

                    <div class="card-body">

                        <div class="p-2">
                            <div class="text-center">

                                <div class="avatar-md mx-auto">
                                    <div class="avatar-title rounded-circle bg-light">
                                        <i class="bx bxs-envelope h1 mb-0 text-primary"></i>
                                    </div>
                                </div>
                                <div class="p-2 mt-4">

                                    <h4>Verify your email</h4>
                                    <p class="mb-5">Please enter the 4 digit code sent to <span
                                            class="fw-semibold">example@abc.com</span></p>

                                    <form>
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit1-input" class="visually-hidden">Dight 1</label>
                                                    <input type="text"
                                                        class="form-control form-control-lg text-center two-step"
                                                        maxLength="1" data-value="1" id="digit1-input">
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit2-input" class="visually-hidden">Dight 2</label>
                                                    <input type="text"
                                                        class="form-control form-control-lg text-center two-step"
                                                        maxLength="1" data-value="2" id="digit2-input">
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit3-input" class="visually-hidden">Dight 3</label>
                                                    <input type="text"
                                                        class="form-control form-control-lg text-center two-step"
                                                        maxLength="1" data-value="3" id="digit3-input">
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <div class="mb-3">
                                                    <label for="digit4-input" class="visually-hidden">Dight 4</label>
                                                    <input type="text"
                                                        class="form-control form-control-lg text-center two-step"
                                                        maxLength="1" data-value="4" id="digit4-input">
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="mt-4">
                                        <a href="index.html" class="btn btn-success w-md">Confirm</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">
                    <p>Didn't receive a code ? <a href="#" class="fw-medium text-primary"> Resend </a> </p>
                    <p>
                        Created
                        <x-icon icon="mdi mdi-robot-excited-outline" /> by VenomError
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>

@push('scripts')
<!-- two-step-verification js -->
<script src="{{ asset('assets/js/pages/two-step-verification.init.js') }}"></script>
@endpush