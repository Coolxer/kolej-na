@vite('resources/sass/dashboard/_layout.scss')

@props(['title', 'currentTab' => null])

<x-layout :title="$title">
    <section {{ $attributes->merge(['class' => 'dashboard']) }}>

        <x-dashboard-navbar />

        <main class="dashboard__page">
            <x-dashboard-side-menu :currentTab="$currentTab" />

            <div class="dashboard__content">
                {{ $slot }}
            </div>
        </main>

        <x-copyright class="dashboard__copyright" />

    </section>
</x-layout>
