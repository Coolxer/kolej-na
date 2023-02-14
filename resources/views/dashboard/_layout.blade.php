@vite('resources/sass/dashboard/_layout.scss')

{{-- 
        user:
            -  [true] -  this should be logged user dashboard content
            - [false] - this should be quest dashboard content
    --}}

@props(['user' => false, 'title', 'currentTab' => null, 'shrink' => false])

<x-layout :title="$title">
    <section {{ $attributes->merge(['class' => 'dashboard']) }}>

        <x-dashboard-navbar />

        <main class="dashboard__main">

            @if ($user)
                <x-dashboard-user-side-menu :currentTab="$currentTab" />
            @else
                <x-dashboard-quest-side-menu :currentTab="$currentTab" />
            @endif

            <div class="dashboard__page">
                <div @class([
                    'dashboard__content',
                    'dashboard__content--shrink' => $shrink,
                ])>
                    {{ $slot }}
                </div>
            </div>
        </main>

        <x-copyright :margin="false" />

    </section>
</x-layout>
