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
                                        <i class="bx bx-mail-send h1 mb-0 text-primary"></i>
                                    </div>
                                </div>
                                <div class="p-2 mt-4">
                                    <h4>Success !</h4>
                                    <p class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                        blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et</p>
                                    <div class="mt-4">
                                        <a href="{{ route('login') }}" class="btn btn-success">Back to Home</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">
                    <p>
                        Created
                        <x-icon icon="mdi mdi-robot-excited-outline" /> by VenomError
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>