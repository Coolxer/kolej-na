@vite('resources/sass/dashboard/_layout.scss')

@props(['title'])

<x-layout :title="$title">
    <div {{ $attributes->merge(['class' => 'dashboard']) }}>

        <x-dashboard-navbar />

        <div class="dashboard__content">
            <div class="dashboard__main">
                <x-dashboard-side-menu />
                {{ $slot }}
            </div>
            <x-action-panel :couldAdd="true" />
        </div>

        <x-copyright class="dashboard__copyright" />

    </div>
</x-layout>
