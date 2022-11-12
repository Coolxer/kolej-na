@vite('resources/sass/dashboard/components/section_data_group.scss')

@props(['key', 'value'])

<div class="section-data-group">
    <span class="section-data-group__key">{{ $key }}</span>
    <span class="section-data-group__value">{{ $value }}</span>
    <hr>
</div>
