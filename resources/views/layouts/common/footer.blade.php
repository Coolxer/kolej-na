@vite('resources/sass/layouts/common/footer.scss')

<footer class="footer">
    <div class="footer__container">

        <header class="brand">
            <div class="brand__box">
                <x-logo className="brand__logo" />
                <span class="brand__name">Kolej-na</span>
            </div>
            <p class="brand__description">Wirtualny system kolejkowy
                deficytowych
                towarów i&nbsp;długotrwałych usług</p>
        </header>

        <header class="brand brand--desktop">
            <x-logo className="brand__logo" />
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
                    <i class="fa-solid fa-at"></i>
                    <span>kontakt@kolej-na.pl</span>
                </div>

                <a href="/policy" class="footer__policy">
                    <i class="fa-regular fa-file"></i>
                    <span>Polityka prywatności</span>
                </a>
            </div>
        </div>

    </div>

    <p class="footer__copyright">
        Copyright &copy; {{ date('Y') }} Kolej-na. Wszelkie prawa
        zastrzeżone.
    </p>

    {{-- Regularmin / RODO, etc.? => jest polityka prywatności --}}
    {{-- Font-awesome attribution? -> chyba nie trzeba bo już w plikach coś jest? --}}
    {{-- unDraw attribution ?  => chyba nie --}}
</footer>
