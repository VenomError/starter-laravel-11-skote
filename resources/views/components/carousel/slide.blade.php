@props(['id'])
<div id="{{ $id }}" data-bs-ride="carousel" {{ $attributes->merge(['class' => 'carousel slide carousel-fade']) }}>
    {{ $slot }}
</div>