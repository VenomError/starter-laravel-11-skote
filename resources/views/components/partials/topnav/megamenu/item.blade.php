@props(['title' => ''])
<li>
    <a {{ $attributes->merge(['href' => '']) }} key="t-{{ $title }}">{{ Str::ucfirst($title) }}</a>
</li>