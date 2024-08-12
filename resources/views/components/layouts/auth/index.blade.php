<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-primary-subtle">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">{{ $title ?? '' }}</h5>
                                    <p>{{ $subTitle ?? '' }}</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <x-image src="assets/images/profile-img.png" alt="image container" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="auth-logo">
                            <x-a href="{{ route('landingPage') }}" class="auth-logo-light">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <x-image src="assets/images/logo-light.svg" alt="avatar" class="rounded-circle"
                                            height="34" />
                                    </span>
                                </div>
                            </x-a>

                            <a href="index.html" class="auth-logo-dark">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <x-image src="assets/images/logo.svg" alt="" class="rounded-circle"
                                            height="34" />
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            {{ $slot }}
                        </div>

                    </div>
                </div>
                <div class="mt-5 text-center">

                    <div>
                        {{$footer ?? ''}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>