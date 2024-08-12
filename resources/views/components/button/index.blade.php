@props([
'add' => '' ,
'waves' => false,
'dark' => false ,
'color' => 'success' ,
'rounded' => false ,
])
<button {{ $attributes->class(
    [
    'btn btn-'.($add ? $add.'-' : '').$color ,
    'waves-effect waves-'.($dark ? 'dark' : 'light')=>$waves ,
    'btn-rounded' => $rounded
    ]
    )->merge(['type' => 'button'])
    }}>
    {{ $slot }}
</button>