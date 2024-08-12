@props(['route' => '' , 'icon' => 'bx bx-customize' , 'title' => 'home' , 'navigate' => false])
<li class="nav-item">
    <x-a class="nav-link" :href="$route" {{ $attributes->merge(['wire:navigate' => $navigate]) }}>
        <x-icon class="me-2" :icon="$icon" />
        <span key="t-default">{{ Str::title($title) }}</span>
    </x-a>
</li>