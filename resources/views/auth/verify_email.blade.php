@vite('resources/sass/auth/verify-email.scss')

<x-auth-layout title="weryfikowanie">
    <x-slot:image>
        <img src="{{ Vite::asset('resources/images/illustrations/verify_email.svg') }}"
            alt="">
    </x-slot:image>

    <x-slot:form>
        <div class="verify-email">
            <x-form action="{{ route('verification.send') }}"
                title="WERYFIKACJA EMAIL">

                <p class="verify-email__sentence">Dziękujęmy
                    za
                    rejestrację! Zanim rozpoczniesz przygodę z naszą
                    platformą, proszę zweryfikuj adres
                    email,
                    klikając w link w wiadomości, którą do Ciebie wysłaliśmy.
                </p>

                <p class="verify-email__sentence">Jeśli nie
                    dostałeś wiadomości, to wyślemy ją ponownie. Kliknij
                    przycisk
                    "Wyślij ponownie"
                </p>

                @if (session('status') == 'verification-link-sent')
                    <p class="auth__status">Link aktywacyjny został wysłany na
                        twojego email'a.</p>
                @endif

                {{-- Submit button --}}
                <x-button>
                    <input type="submit" value="Wyślj ponownie" />
                    <i class="fa-solid fa-paper-plane"></i>
                </x-button>
            </x-form>

            <x-form action="{{ route('logout') }}">
                <x-button secondary class="verify-email__logout-btn">
                    <input type="submit" value="Wyloguj" />
                    <i class="fa-solid fa-power-off"></i>
                </x-button>
            </x-form>

        </div>
    </x-slot:form>

</x-auth-layout>
