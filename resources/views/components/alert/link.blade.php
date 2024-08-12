@props(['href' => ''])
<x-a {{ $attributes->merge(['class' => 'alert-link']) }} :href="$href" >
    {{ $slot }}
</x-a>.