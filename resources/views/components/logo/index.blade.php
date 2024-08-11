<a {{ $attributes->merge(['href' => '']) }} class="logo logo-dark">
    <span class="logo-sm">
        <x-logo.dark-sm />
    </span>
    <span class="logo-lg">
        <x-logo.dark />
    </span>
</a>

<a {{ $attributes->merge(['href' => '']) }} class="logo logo-light">
    <span class="logo-sm">
        <x-logo.light-sm />
    </span>
    <span class="logo-lg">
        <x-logo.light />
    </span>
</a>