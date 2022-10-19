@vite('resources/sass/dashboard/_layout.scss')

@props(['title'])

<x-layout :title="$title">
    <div {{ $attributes->merge(['class' => 'dashboard']) }}>

        <x-dashboard-navbar />

        <div class="dashboard__content">
            <x-dashboard-side-menu />
            {{ $slot }}
        </div>

        <div class="dashboard__lower">
            <x-action-panel :couldAdd="true" />
            <x-copyright class="dashboard__copyright" />
        </div>

    </div>
</x-layout>
