@props(['id', 'count' => 0])

<div class="carousel-indicators">
    @for ($i = 0; $i < $count; $i++) <button type="button" data-bs-target="#{{ $id }}" data-bs-slide-to="{{ $i }}"
        class="{{ $i === 0 ? 'active' : '' }}" aria-current="{{ $i === 0 ? 'true' : 'false' }}"
        aria-label="Slide {{ $i + 1 }}"></button>
        @endfor
</div>