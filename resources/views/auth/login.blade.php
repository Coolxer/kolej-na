@vite('resources/sass/auth/login.scss')

<x-layout>
    <div class="login">
        <div class="login__brand-box">
            <x-logo class="login__logo" withBrandName />
        </div>

        <div class="login__content">
            <img src="{{ Vite::asset('resources/images/illustrations/login.svg') }}"
                class="login__image" alt="">

            <form class="form" method="POST" action="{{ route('login') }}">
                @csrf

                <legend class="form__legend">LOGOWANIE</legend>

                @error('failed')
                    <span class="login--failed">{{ $message }}</span>
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

                <div class="form__forgot-remember">

                    {{-- Forgot Password ? --}}
                    @if (Route::has('password.request'))
                        <a class="form__forgot-password"
                            href="{{ route('password.request') }}">
                            Przypomnij hasło
                        </a>
                    @endif

                    {{-- Remember me --}}
                    <x-form-group id="remember" label="Zapamiętaj"
                        type="checkbox" class="form__remember-me"
                        :errors="[]" />

                </div>

                {{-- Submit button --}}
                <x-button>
                    <input type="submit" value="Zaloguj" />
                    <i class="fa-solid fa-right-to-bracket"></i>
                </x-button>

                <a href="/rejestracja" class="form__registration-link">
                    Nie mam konta!</a>
            </form>
        </div>

        <x-copyright />

    </div>

</x-layout>
