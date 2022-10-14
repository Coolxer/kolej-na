@vite('resources/sass/auth/register.scss')

<x-auth-layout class="register">
    <x-slot:image>
        <img src="{{ Vite::asset('resources/images/illustrations/register.svg') }}"
            alt="">
    </x-slot:image>

    <x-slot:form>
        <x-form class="register-form" action="{{ route('login') }}"
            title="REJESTRACJA">

            <x-choose-personality />

            {{-- @error('failed')
                <span class="login-form--failed">{{ $message }}</span>
            @enderror --}}

            <div class="register-form__names">

                {{--  Imię --}}
                <x-form-group id="first_name" label="Imię" :errors="[]">
                    <x-slot:icon>
                        <i class="fa-solid fa-signature"></i>
                    </x-slot:icon>
                </x-form-group>

                {{--  Nazwisko --}}
                <x-form-group id="last_name" label="Nazwisko" :errors="[]">
                    <x-slot:icon>
                        <i class="fa-solid fa-signature"></i>
                    </x-slot:icon>
                </x-form-group>

            </div>

            {{--  Company --}}
            <x-form-group class="register-form__company" id="company"
                label="Nazwa firmy" :errors="[]">
                <x-slot:icon>
                    <i class="fa-regular fa-building"></i>
                </x-slot:icon>
            </x-form-group>

            {{--  Email --}}
            <x-form-group id="email" label="Email" :value="old('email')"
                :errors="$errors->get('email')">
                <x-slot:icon>
                    <i class="fa-solid fa-at"></i>
                </x-slot:icon>
            </x-form-group>

            {{-- Password  --}}
            <x-form-group id="password" label="Hasło" type="password"
                autocomplete="new-password" :errors="$errors->get('password')">
                <x-slot:icon>
                    <i class="fa-solid fa-lock"></i>
                </x-slot:icon>
            </x-form-group>

            {{-- Confirm Password  --}}
            <x-form-group id="password_confirmation" label="Potwierdzenie hasła"
                type="password" :errors="$errors->get('password_confirmation')">
                <x-slot:icon>
                    <i class="fa-solid fa-lock"></i>
                </x-slot:icon>
            </x-form-group>

            {{-- Submit button --}}
            <x-button>
                <input type="submit" value="Zarejestruj" />
                <i class="fa-solid fa-right-to-bracket"></i>
            </x-button>

            <div class="auth-form__already-done">
                <span> Masz już konto?</span>
                <x-button secondary small>
                    <a href="/logowanie">
                        Zaloguj się!</a>
                </x-button>
            </div>

        </x-form>

    </x-slot:form>

</x-auth-layout>

<script>
    const personSection = document.getElementsByClassName(
        'register-form__names')[0];
    const companySection = document.getElementsByClassName(
        'register-form__company')[0];


    const chooseButtons = document.getElementsByClassName(
        'choose-personality__btn');

    const personButton = document.getElementById(
        'choose-personality__person-btn');
    const companyButton = document.getElementById(
        'choose-personality__company-btn');

    function amPerson() {
        personSection.style.display = 'flex';
        companySection.style.display = 'none';

        personButton.classList.add('choose-personality__btn--selected');
        companyButton.classList.remove('choose-personality__btn--selected');
    }

    function amCompany() {
        companySection.style.display = 'flex';
        personSection.style.display = 'none';

        companyButton.classList.add('choose-personality__btn--selected');
        personButton.classList.remove('choose-personality__btn--selected');
    }
</script>
