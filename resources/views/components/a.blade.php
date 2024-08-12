<a {{ $attributes->merge(['wire:navigate' => config('app.full_page_components') ]) }}>
    {{ $slot }}
</a>