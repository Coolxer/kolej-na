@vite('resources/sass/dashboard/components/section_data_group.scss')

@props(['icon' => null, 'key', 'value', 'hideValue' => false])

<div class="section-data-group">
    <span
        class="section-data-group__key">{{ $icon }}{{ $key }}</span>

    @if (!$hideValue)
        <span class="section-data-group__value">{{ $value }}</span>
    @endif

    {{ $slot }}

    {{-- <hr> --}}
</div>
