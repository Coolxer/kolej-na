<x-auth-layout>
    <x-slot:image>
        <img src="{{ Vite::asset('resources/images/illustrations/forgot_password.svg') }}"
            alt="">
    </x-slot:image>

    <x-slot:form>
        <x-form action="{{ route('password.update') }}" title="RESETOWANIE HASŁA">
            {{--   Password Reset Token --}}
            <input type="hidden" name="token"
                value="{{ $request->route('token') }}">

            {{--  Email --}}
            <x-form-group id="email" label="Email" ::value="old('email', $request - > email)"
                maxlength="50" autofocus :errors="$errors->get('email')">
                <x-slot:icon>
                    <i class="fa-solid fa-at"></i>
                </x-slot:icon>
            </x-form-group>

            {{-- Password  --}}
            <x-form-group id="password" label="Hasło" type="password"
                maxlength="255" :errors="$errors->get('password')">
                <x-slot:icon>
                    <i class="fa-solid fa-lock"></i>
                </x-slot:icon>
            </x-form-group>

            {{-- Confirm Password  --}}
            <x-form-group id="password_confirmation" label="Potwierdzenie hasła"
                type="password" maxlength="255" :errors="$errors->get('password_confirmation')">
                <x-slot:icon>
                    <i class="fa-solid fa-lock"></i>
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
