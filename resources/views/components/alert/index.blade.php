@props(['type' => 'success' , 'icon' , 'dismiss' => false])

<div {{ $attributes->merge(['class' => 'alert'])->class(['alert-'.$type , 'alert-dismissible fade show' => $dismiss ])
    }}
    role="alert">
    @isset($icon)
    <x-icon :icon="$icon" class="me-2" />
    @endisset
    {{ $slot }}

    @if ($dismiss)
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>