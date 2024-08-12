@props(['src' => 'assets/images/small/img-3.jpg', 'active' => false, 'caption' => null])

<div class="carousel-item {{ $active ? 'active' : '' }}">
    <x-image class="d-block img-fluid" :src="$src" alt="Slide image" />

    @isset($caption)
    <div class="carousel-caption d-none d-md-block text-white-50">
        {{ $caption }}
    </div>
    @endisset
</div>