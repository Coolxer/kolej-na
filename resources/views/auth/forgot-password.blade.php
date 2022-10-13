{{-- <x-guest-layout>
    <x-auth-card>
       
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input id="email" class="mt-1 block w-full"
                    type="email" name="email" :value="old('email')" required
                    autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mt-4 flex items-center justify-end">
                <x-primary-button>
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

{{-- ###################################################################### --}}

<x-auth-layout>
    <x-slot:image>
        <img src="{{ Vite::asset('resources/images/illustrations/forgot_password.svg') }}"
            alt="">
    </x-slot:image>

    <x-slot:form>
        <x-form action="{{ route('login') }}" title="PRZYPOMINANIE HASŁA">

            <p style="text-align: justify; margin-bottom: 20px;">Jeśli
                zapomniałeś
                hasła - nie
                przejmuj się. Podaj swojego
                e-maila, a wyślemy ci link do zresetowania hasła.</p>

            {{--  Email --}}
            <x-form-group id="email" label="Email" :value="old('email')"
                :errors="$errors->get('email')">
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
