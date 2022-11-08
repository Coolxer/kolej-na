@vite('resources/sass/queue/quest/search.scss')

<x-layout title="wyszukiwanie">
    <div class="queue-search">
        <div class="queue-search__wrapper">
            <div>
                <img src="{{ Vite::asset('resources/images/illustrations/queue_search.svg') }}"
                    alt="">

                <p class="queue-search__message">Aby zobaczyć kolejkę,
                    podaj identyfikator
                    kolejki otrzymany od sprzedawcy.</p>
            </div>

            <div class="queue-search__interactive">
                <x-queue-join-input secondary />

                <x-button secondary>
                    <a href="{{ route('home') }}">Strona główna</a>
                    <i class="fa-solid fa-house"></i>
                </x-button>

            </div>
        </div>
    </div>

    <x-copyright :margin="false" />

</x-layout>
