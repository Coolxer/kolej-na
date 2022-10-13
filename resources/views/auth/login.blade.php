@vite('resources/sass/auth/login.scss')

<x-auth-layout class="login">
    <x-slot:image>
        <img src="{{ Vite::asset('resources/images/illustrations/login.svg') }}"
            alt="">
    </x-slot:image>

    <x-slot:form>
        <x-form class="login-form" action="{{ route('login') }}" title="LOGOWANIE">

            @error('failed')
                <span class="login-form--failed">{{ $message }}</span>
            @enderror

            {{--  Email --}}
            <x-form-group id="email" label="Email" :value="old('email')"
                :errors="$errors->get('email')">
                <x-slot:icon>
                    <i class="fa-solid fa-at"></i>
                </x-slot:icon>
            </x-form-group>

            {{-- Password  --}}
            <x-form-group id="password" label="Hasło" type="password"
                :value="old('email')" autocomplete="current-password"
                :errors="$errors->get('password')">
                <x-slot:icon>
                    <i class="fa-solid fa-lock"></i>
                </x-slot:icon>
            </x-form-group>

            <div class="login-form__forgot-remember">

                {{-- Forgot Password ? --}}
                @if (Route::has('password.request'))
                    <a class="login-form__forgot-password"
                        href="{{ route('password.request') }}">
                        Przypomnij hasło
                    </a>
                @endif

                {{-- Remember me --}}
                <x-form-group id="remember" label="Zapamiętaj" type="checkbox"
                    class="login-form__remember-me" :errors="[]" />
            </div>

            {{-- Submit button --}}
            <x-button>
                <input type="submit" value="Zaloguj" />
                <i class="fa-solid fa-right-to-bracket"></i>
            </x-button>

            <a href="/rejestracja" class="login-form__registration-link">
                Nie mam konta!</a>

        </x-form>

    </x-slot:form>

</x-auth-layout>
