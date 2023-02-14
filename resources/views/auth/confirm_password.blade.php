<x-auth-layout title="potwierdzanie">
    <x-slot:image>
        <img src="{{ Vite::asset('resources/images/illustrations/forgot_password.svg') }}"
            alt="">
    </x-slot:image>

    <x-slot:form>
        <x-form action="{{ route('password.confirm') }}"
            title="POTWIERDZANIE HASŁA">

            <p style="text-align: justify; margin-bottom: 20px;">Jeśli
                To jest bezpieczny obszar aplikacji. Potwierdź hasło, zanim
                przejdziesz dalej.
            </p>

            {{-- Password  --}}
            <x-form-group id="password" label="Hasło" type="password"
                maxlength="255" :errors="$errors->get('password')">
                <x-slot:icon>
                    <i class="fa-solid fa-lock"></i>
                </x-slot:icon>
            </x-form-group>

            {{-- Submit button --}}
            <x-button>
                <input type="submit" value="Potwierdź hasło" />
                <i class="fa-solid fa-key"></i>

            </x-button>

        </x-form>
    </x-slot:form>

</x-auth-layout>
