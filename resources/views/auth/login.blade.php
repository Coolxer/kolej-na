@vite('resources/sass/auth/login.scss')

<x-layout>
    <div class="login">
        <x-logo dark class="login__logo" />

        <!-- Session Status -->
        {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

        <form class="form" method="POST" action="{{ route('login') }}">
            @csrf

            {{ count($errors) }}

            <legend class="form__legend">Logowanie</legend>

            {{-- -
                :messages="$errors->get('email')"
                :messages="$errors->get('password')"
            --}}

            <!-- Email Address -->
            <x-form-group id="email" label="Email" type="email"
                :value="old('email')" required autofocus :errors="$errors->get('email')" />

            <!-- Password -->
            <x-form-group id="password" label="Hasło" type="password"
                :value="old('email')" required autocomplete="current-password" />

            <!-- Remember Me -->
            <x-form-group id="remember" label="Zapamiętaj mnie" type="checkbox"
                class="form__remember-me" />

            <!-- Forgot Password ? -->
            @if (Route::has('password.request'))
                <a class="form__forgot-password"
                    href="{{ route('password.request') }}">
                    Zapomniałem hasła
                </a>
            @endif

            <!-- Submit button -->
            <x-button class="form__btn">
                <input type="submit" value="Zaloguj" />
            </x-button>
        </form>

        <x-copyright />

    </div>
</x-layout>
