@vite('resources/sass/landing/partials/footer.scss')

<footer class="footer">
    <div class="footer__container">

        <header class="brand">
            <div class="brand__box">
                <x-logo class="brand__logo" scrollTo />
                <span class="brand__name">Kolej-na</span>
            </div>
            <p class="brand__description">Wirtualny system kolejkowy
                deficytowych
                towarów i&nbsp;długotrwałych usług</p>
        </header>

        <header class="brand brand--desktop">
            <x-logo class="brand__logo" scrollTo />
            <div class="brand__box">
                <span class="brand__name">Kolej-na</span>
                <p class="brand__description">Wirtualny system kolejkowy
                    deficytowych
                    towarów i&nbsp;długotrwałych usług</p>
            </div>
        </header>

        <div class="footer__divider"></div>

        <div class="footer__interactive">
            <div class="socials">
                <a href="#facebook">
                    <i
                        class="fa-brands fa-facebook socials__icon socials__icon--facebook"></i>
                </a>
                <a href="#youtube">
                    <i
                        class="fa-brands fa-youtube socials__icon socials__icon--youtube"></i>
                </a>
            </div>

            <div class="footer__info">
                <div class="footer__contact-box">
                    <i class="fa-regular fa-envelope"></i>
                    <span>kontakt@kolej-na.pl</span>
                </div>

                <a href="/regulamin" target="_blank"
                    class="footer__terms-of-service">
                    <i class="fa-regular fa-file"></i>
                    <span>Regulamin</span>
                </a>

                <a href="/policy" target="_blank" class="footer__policy">
                    <i class="fa-regular fa-file"></i>
                    <span>Polityka prywatności</span>
                </a>
            </div>
        </div>

    </div>

    <x-copyright />
</footer>
