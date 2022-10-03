@vite('resources/sass/layouts/landing/hero.scss')

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
                <a href="#">
                    Dołącz!
                </a>
            </x-button>
        </div>

        <i class="fa-solid fa-users hero__users-icon"></i>

    </div>
</section>
