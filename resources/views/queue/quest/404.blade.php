@vite('resources/sass/queue/quest/404.scss')

<x-layout title="brak kolejki">
    <div class="queue-404">
        <div class="queue-404__wrapper">
            <div>
                <img src="{{ Vite::asset('resources/images/illustrations/queue_404.svg') }}"
                    alt="">

                <p class="queue-404__not-found">Kolejka o danym identyfikatorze
                    nie
                    istnieje!</p>
            </div>
            <div>
                <div class="queue-404__id">{{ $id }}</div>

                <p class="queue-404__message">Upewnij się, że wpisałeś
                    identyfikator
                    poprawnie. Jeśli tak, to
                    skontaktuj ze sprzedawcą celem weryfikacji identyfikatora.
                </p>

                <div class="queue-404__buttons">
                    <x-button>
                        <a href="{{ route('queue.quest.search') }}">Wprowadź
                            ponownie</a>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </x-button>

                    <x-button secondary>
                        <a href="{{ route('home') }}">Strona główna</a>
                        <i class="fa-solid fa-house"></i>
                    </x-button>
                </div>
            </div>
        </div>
    </div>

    <x-copyright :margin="false" />

</x-layout>
