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
    @endif
    >

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

    {{ $slot }}

    {{ $scripts }}
</body>
@endempty

@isset($auth)

<body>
    {{ $auth }}
    {{ $scripts }}
</body>

@endisset