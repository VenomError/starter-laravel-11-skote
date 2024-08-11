@props(['title' => ''])
<h5 class="font-size-14" key="t-ui-components">{{ Str::title($title) }}</h5>
<ul class="list-unstyled megamenu-list">
    {{ $slot }}
</ul>