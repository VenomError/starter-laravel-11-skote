@props(['id' => 'carouselExampleIndicators' , 'indicator' => true , 'control' => true , 'count'])
<x-carousel.slide :id="$id">
    @if ($indicator)
    <x-carousel.indicator :id="$id" :count="$count" />
    @endif
    <div class="carousel-inner" role="listbox">
        {{ $slot }}
    </div>
    @if ($control)
    <a class="carousel-control-prev" href="#{{ $id }}" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#{{ $id }}" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    @endif
</x-carousel.slide>