@props(['route' => 'dashboard' , 'icon' => 'bx bx-customize' , 'title' => 'home' , 'navigate' => false])
<li>
    <x-a href="{{ route($route)}}" class="waves-effect" {{ $attributes->merge(['wire:navigate' => $navigate]) }}
        >
        <x-icon :icon="$icon" />
        <span key="t-{{ $route }}">{{ Str::title($title) }}</span>
    </x-a>
</li>