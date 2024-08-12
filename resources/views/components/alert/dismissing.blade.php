<x-alert {{ $attributes->merge(['class'=>'alert-dismissible fade show']) }}>
    {{ $slot }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</x-alert>