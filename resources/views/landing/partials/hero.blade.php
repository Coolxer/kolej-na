@vite('resources/sass/landing/partials/hero.scss')

<section class="hero">
    <div class="hero__container">
        <div class="hero__informations">
            <header class="hero__header">
                <h1 class="hero__heading">KOLEJ <br /> - NA ... </h1>
                <p class="hero__description">Wirtualny system kolejkowy
                    deficytowych towarów
                    i&nbsp;długotrwałych usług</p>
            </header>
            <div class="hero__services-list">
                <div class="service">
                    <i class="fa-solid fa-cart-shopping service__icon"></i>
                    <span class="service__name">Produkt</span>
                </div>
                <div class="service">
                    <i class="fa-solid fa-truck service__icon"></i>
                    <span class="service__name">Usługę</span>
                </div>
                <div class="service">
                    <i class="fa-solid fa-user service__icon"></i>
                    <span class="service__name">Ciebie</span>
                </div>
            </div>

            <x-search-queue-form />

            <x-button secondary>
                <a href="{{ route('register') }}">Dołącz do nas!</a>
                <i class="fa-solid fa-right-to-bracket"></i>
            </x-button>

        </div>

        <img class="hero__queue-image"
            src="{{ Vite::asset('resources/images/illustrations/queue.svg') }}"
            alt="">

    </div>
</section>
