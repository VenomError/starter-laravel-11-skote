@empty ($auth)

<body @if ($layout=="horizontal" ) {{ $attributes->merge([
    'data-topbar' => $theme,
    'data-layout' => 'horizontal' ,
    'data-layout-size' => 'boxed'
    ]) }} @endif

    @if ($layout=="vertical" )
    {{ $attributes->merge([
    'data-sidebar' => $theme,
    'data-topbar' => 'dark',
    'data-keep-enlarged'=>'true'
    ])->class(['vertical-collpsed']) }}
    @endif>

    @if ($preloader)
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner-chase">
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
            </div>
        </div>
    </div>
    @endif

    @if ($layout == "horizontal")
    <x-layouts.horizontal>
        {{ $slot }}
    </x-layouts.horizontal>
    @endif

    @unless ($layout == "horizontal")
    <x-layouts.vertical>
        {{ $slot }}
    </x-layouts.vertical>
    @endunless

    <div class="rightbar-overlay"></div>

    {{ $scripts }}
</body>
@endempty

@isset($auth)

<body>
    {{ $auth }}
    {{ $scripts }}
</body>

@endisset