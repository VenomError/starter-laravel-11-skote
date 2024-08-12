@props([
'route' => '',
'icon' => 'bx bx-home-circle',
'title' => 'home',
'navigate' => false,
'menus' => []
])
<li>
    <a class="has-arrow waves-effect">
        <x-icon :icon="$icon" />
        <span key="t-{{ $route }}">{{ Str::title($title) }}</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        @foreach ($menus as $menu )
        <li>
            <x-a href="{{ route($menu['route']) }}" key="t-{{ $menu['route'] }}">{{ Str::title($menu['title']) }} </x-a>
        </li>
        @endforeach
    </ul>
</li>