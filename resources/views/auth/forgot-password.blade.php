<x-auth-layout>
    <x-slot:image>
        <img src="{{ Vite::asset('resources/images/illustrations/forgot_password.svg') }}"
            alt="">
    </x-slot:image>

    {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

    <x-slot:form>
        <x-form action="{{ route('password.email') }}"
            title="PRZYPOMINANIE HASŁA">

            <p style="text-align: justify; margin-bottom: 20px;">Jeśli
                zapomniałeś
                hasła - nie
                przejmuj się. Podaj swojego
                e-maila, a wyślemy ci link do zresetowania hasła.</p>

            {{--  Email --}}
            <x-form-group id="email" label="Email" :value="old('email')"
                maxlength="50" autofocus :errors="$errors->get('email')">
                <x-slot:icon>
                    <i class="fa-solid fa-at"></i>
                </x-slot:icon>
            </x-form-group>

            {{-- Submit button --}}
            <x-button>
                <input type="submit" value="Resetuj hasło" />
                <i class="fa-solid fa-key"></i>

            </x-button>

        </x-form>
    </x-slot:form>

</x-auth-layout>
