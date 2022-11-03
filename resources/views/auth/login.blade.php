@vite('resources/sass/auth/login.scss')

<x-auth-layout title="logowanie" class="login">
    <x-slot:image>
        <img src="{{ Vite::asset('resources/images/illustrations/login.svg') }}"
            alt="">
    </x-slot:image>

    <x-slot:form>
        <x-form class="login-form" action="{{ route('login') }}" title="LOGOWANIE">

            <x-session-status />

            {{--  Email --}}
            <x-form-group id="email" label="Email" :value="old('email')"
                maxlength="50" :errors="$errors->get('email')">
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
                    :errors="[]" />
            </div>

            {{-- Submit button --}}
            <x-button>
                <input type="submit" value="Zaloguj" />
                <i class="fa-solid fa-right-to-bracket"></i>
            </x-button>

            <div class="auth-form__already-done">
                <span> Nie masz konta?</span>
                <x-button secondary small>
                    <a href="{{ route('register') }}">
                        Zarejestruj się!</a>
                </x-button>
            </div>

        </x-form>

    </x-slot:form>

</x-auth-layout>
