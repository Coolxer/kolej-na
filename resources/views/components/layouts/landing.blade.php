<x-layouts.default>
    <x-slot:title>
        Ciebie!
    </x-slot:title>

    <x-layouts.partials.navbar />
    {{ $slot }}
    <x-layouts.partials.footer />
</x-layouts.default>
