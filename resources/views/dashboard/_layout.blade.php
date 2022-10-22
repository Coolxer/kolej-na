@vite('resources/sass/dashboard/_layout.scss')

@props(['title', 'currentTab' => null, 'possibleActions'])

<x-layout :title="$title">
    <div {{ $attributes->merge(['class' => 'dashboard']) }}>

        <x-dashboard-navbar />

        <div class="dashboard__content">
            <div class="dashboard__main">
                <x-dashboard-side-menu :currentTab="$currentTab" :possibleActions="$possibleActions" />
                {{ $slot }}
            </div>
            <x-action-panel :possibleActions="$possibleActions" />
        </div>

        <x-copyright class="dashboard__copyright" />

    </div>
</x-layout>
