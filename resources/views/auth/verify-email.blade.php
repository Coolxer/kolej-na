<x-auth-layout>
    <x-slot:image>
        <img src="{{ Vite::asset('resources/images/illustrations/verify_email.svg') }}"
            alt="">
    </x-slot:image>

    <x-slot:form>
        <x-form action="{{ route('verification.send') }}"
            title="WERYFIKACJA EMAIL">

            <p style="text-align: justify; margin-bottom: 20px;">Dziękujęmy za
                rejestrację! Zanim rozpoczniesz, proszę zweryfikuj adres email,
                klikając w link w wiadomości, którą do Ciebie wysłaliśmy.
            </p>

            <p style="text-align: justify; margin-bottom: 20px;">Jeśli nie
                dostałeś wiadomości, to wyślemy ją ponownie. Kliknij przycisk
                "Wyślij ponownie"
            </p>

            @if (session('status') == 'verification-link-sent')
                <p>Link aktywacyjny został wysłany na twojego email'a.</p>
            @endif

            {{-- Submit button --}}
            <x-button>
                <input type="submit" value="Wyślj ponownie" />
                <i class="fa-solid fa-paper-plane"></i>
            </x-button>
        </x-form>

        <x-form action="{{ route('logout') }}" title="">

            {{-- Submit button --}}
            <x-button>
                <input type="submit" value="Wyloguj" />
                <i class="fa-solid fa-power-off"></i>
            </x-button>
        </x-form>
    </x-slot:form>

</x-auth-layout>
