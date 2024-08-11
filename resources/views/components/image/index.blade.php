@props(['src'])
<img src="{{ asset($src) }}" {{ $attributes }} {{ $attributes->merge(['alt' =>'image']) }}>