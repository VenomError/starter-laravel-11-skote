<ul class="navbar-nav">

    @foreach (config('sidebar.user') as $sidebar)
    @if (empty($sidebar['sub']))
    <x-partials.topbar.menu route="{{ route($sidebar['route']) }}" icon="{{ $sidebar['icon'] ?? 'bx bx-home-circle' }}"
        title="{{ $sidebar['title'] ?? 'home' }}" :navigate="$sidebar['navigate']" />
    @else
    <x-partials.topbar.menu-dropdown route="{{ $sidebar['route'] ?? '' }}"
        icon="{{ $sidebar['icon'] ?? 'bx bx-home-circle' }}" title="{{ $sidebar['title'] ?? 'home' }}"
        :menus="$sidebar['sub']" :navigate="$sidebar['navigate']" />
    @endif
    @endforeach

</ul>