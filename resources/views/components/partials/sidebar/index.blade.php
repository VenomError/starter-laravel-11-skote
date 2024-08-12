<ul class="metismenu list-unstyled" id="side-menu">

    @foreach (config('sidebar.user') as $sidebar)
    @if (empty($sidebar['sub']))
    <x-partials.sidebar.menu route="{{ $sidebar['route'] }}" icon="{{ $sidebar['icon'] ?? 'bx bx-home-circle' }}"
        title="{{ $sidebar['title'] ?? 'home' }}" :navigate="$sidebar['navigate']" />
    @else
    <x-partials.sidebar.menu-dropdown route="{{ $sidebar['route']  }}"
        icon="{{ $sidebar['icon'] ?? 'bx bx-home-circle' }}" title="{{ $sidebar['title'] }}" :menus="$sidebar['sub']"
        :navigate="$sidebar['navigate']" />
    @endif
    @endforeach
</ul>