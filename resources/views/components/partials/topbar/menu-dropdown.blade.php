@props([
'route' => '',
'icon' => 'bx bx-home-circle',
'title' => 'home',
'navigate' => false,
'menus' => []
])

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle arrow-none" href="#" id="{{ $route }}" role="button">
        <x-icon :icon="$icon" class="me-2" />
        <span key="t-{{ $route }}">{{ Str::title($title) }}</span>
        <div class="arrow-down"></div>
    </a>
    <div class="dropdown-menu" aria-labelledby="{{ $route }}">
        @foreach ($menus as $menu)
        <x-a href="{{ $menu['route'] }}" class="dropdown-item" key="t-{{ $menu['route'] }}" {{ $attributes->
            merge(['wire:navigate' => $navigate]) }}
            >
            {{ Str::title($menu['title']) }}
        </x-a>
        @endforeach
    </div>
</li>