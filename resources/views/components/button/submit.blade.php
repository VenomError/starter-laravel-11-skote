@props([
'add' => '' ,
'waves' => false,
'dark' => false ,
'color' => 'success' ,
'rounded' => false ,
'loading' => true ,
'textLoading' => 'Loading ...'
])
<button {{ $attributes->class(
    [
    'btn btn-'.($add ? $add.'-' : '').$color ,
    'waves-effect waves-'.($dark ? 'dark' : 'light')=>$waves ,
    'btn-rounded' => $rounded
    ])->merge(
    [
    'type' =>'submit'
    ])
    }} wire:loading.attr='disabled'>
    <div wire:loading.remove>
        {{ $slot }}
    </div>
    <div wire:loading>
        <i class="bx bx-loader bx-spin font-size-16 align-middle me-2"></i> {{ $textLoading }}
    </div>
</button>