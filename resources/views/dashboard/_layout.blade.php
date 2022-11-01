@vite('resources/sass/dashboard/_layout.scss')

@props(['title', 'currentTab' => null, 'shrink' => false])

<x-layout :title="$title">
    <section {{ $attributes->merge(['class' => 'dashboard']) }}>

        <x-dashboard-navbar />

        <main class="dashboard__main">
            <x-dashboard-side-menu :currentTab="$currentTab" />

            <div class="dashboard__page">
                <div @class([
                    'dashboard__content',
                    'dashboard__content--shrink' => $shrink,
                ])>
                    {{ $slot }}
                </div>
            </div>
        </main>

        <x-copyright class="dashboard__copyright" />

    </section>
</x-layout>
