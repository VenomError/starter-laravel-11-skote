<x-layouts.auth>
    <x-slot:title>Free Register</x-slot:title>
    <x-slot:subTitle>Get your free Skote account now.</x-slot:subTitle>


    <form class="form-horizontal">

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username">
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <div class="input-group auth-pass-inputgroup">
                <input type="password" class="form-control" placeholder="Enter password" aria-label="Password"
                    aria-describedby="password-addon">
                <button class="btn btn-light " type="button" id="password-addon"><i
                        class="mdi mdi-eye-outline"></i></button>
            </div>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="remember-check">
            <label class="form-check-label" for="remember-check">
                Remember me
            </label>
        </div>

        <div class="mt-3 d-grid">
            <button class="btn btn-primary waves-effect waves-light" type="submit">Log
                In</button>
        </div>

        <x-layouts.auth.login-options />

        <div class="mt-4 text-center">
            <x-a href="{{ route('forgotPassword') }}" class="text-muted"><i class="mdi mdi-lock me-1"></i>
                Forgot your password?</x-a>
        </div>
    </form>

    <x-slot:footer>
        <p>Already have an account ?
            <x-a href="{{ route('login') }}" class="fw-medium text-primary" wire:navigate>
                Login
            </x-a>
        </p>
        <p>
            Created
            <x-icon icon="mdi mdi-robot-excited-outline" /> by VenomError
        </p>
    </x-slot:footer>
</x-layouts.auth>