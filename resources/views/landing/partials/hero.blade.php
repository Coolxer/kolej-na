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

            <x-button secondary>
                <a href="{{ route('register') }}">Dołącz do nas!</a>
                <i class="fa-solid fa-right-to-bracket"></i>
            </x-button>

            <form action="">
                <div class="hero-form">

                    <x-form-group id="queue-id" label="Numer kolejki"
                        class="hero-form__group" :displayErrors="false"
                        :defaultHoverStyle="false" minlength="6" maxlength="6">
                        <x-slot:icon>
                            <i class="fa-regular fa-circle-question"
                                title="Numer kolejki to zawsze 6 znakowy (liczby i cyfry) identyfikator"></i>
                        </x-slot:icon>
                    </x-form-group>

                    <button type="submit" title="Sprawdź kolejkę">
                        <i class="fa-solid fa-fingerprint hero-form__icon"></i>
                    </button>

                </div>
            </form>
        </div>

        <img class="hero__queue-image"
            src="{{ Vite::asset('resources/images/illustrations/queue.svg') }}"
            alt="">

    </div>
</section>
