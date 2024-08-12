<x-layouts.auth>
    <x-slot:title>Reset Password</x-slot:title>
    <x-slot:subTitle>Reset Password with Skote.</x-slot:subTitle>


    <div class="alert alert-success text-center mb-4" role="alert">
        Enter your Email and instructions will be sent to you!
    </div>
    <form class="form-horizontal">

        <div class="mb-3">
            <label for="useremail" class="form-label">Email</label>
            <input type="email" class="form-control" id="useremail" placeholder="Enter email">
        </div>

        <div class="text-end">
            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Reset</button>
        </div>

    </form>

    <x-slot:footer>
        <p>Remember it ?
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