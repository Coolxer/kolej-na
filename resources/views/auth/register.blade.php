@vite('resources/sass/auth/register.scss')

<x-auth-layout class="register">
    <x-slot:image>
        <img src="{{ Vite::asset('resources/images/illustrations/register.svg') }}"
            alt="">
    </x-slot:image>

    <x-slot:form>
        <x-form class="register-form" action="{{ route('register') }}"
            title="REJESTRACJA">

            <x-choose-personality />

            <input class="register-form__is-company" id="is-company"
                name="is-company" type="checkbox" hidden />

            {{-- @error('failed')
                <span class="register-form--failed">{{ $message }}</span>
            @enderror --}}

            <div class="register-form__names">

                {{--  Imię --}}
                <x-form-group id="first_name" label="Imię" maxlength="50"
                    :errors="$errors->get('first_name')">
                    <x-slot:icon>
                        <i class="fa-solid fa-signature"></i>
                    </x-slot:icon>
                </x-form-group>

                {{--  Nazwisko --}}
                <x-form-group id="last_name" label="Nazwisko" maxlength="50"
                    :errors="$errors->get('last_name')">
                    >
                    <x-slot:icon>
                        <i class="fa-solid fa-signature"></i>
                    </x-slot:icon>
                </x-form-group>

            </div>

            {{--  Company --}}
            <div class="register-form__company">
                <x-form-group c id="company" label="Nazwa firmy"
                    maxlength="50" :errors="$errors->get('company')">>
                    <x-slot:icon>
                        <i class="fa-regular fa-building"></i>
                    </x-slot:icon>
                </x-form-group>
            </div>

            {{--  Email --}}
            <x-form-group id="email" label="Email" maxlength="255"
                :value="old('email')" :errors="$errors->get('email')">
                <x-slot:icon>
                    <i class="fa-solid fa-at"></i>
                </x-slot:icon>
            </x-form-group>

            {{-- Password  --}}
            <x-form-group id="password" label="Hasło" type="password"
                maxlength="255" autocomplete="new-password" :errors="$errors->get('password')">
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

    const personButton = document.getElementById(
        'choose-personality__person-btn');
    const companyButton = document.getElementById(
        'choose-personality__company-btn');

    const firstNameInput = document.getElementById('first_name');
    const lastNameInput = document.getElementById('last_name');
    const companyInput = document.getElementById('company');
    const isCompanyCheckbox = document.getElementById('is-company');

    let firstName = '';
    let lastName = '';
    let company = '';

    companyInput.value = 'xxx';

    function amPerson() {
        personSection.style.display = 'flex';
        companySection.style.display = 'none';

        personButton.classList.add('choose-personality__btn--selected');
        companyButton.classList.remove('choose-personality__btn--selected');

        isCompanyCheckbox.checked = false;

        if (firstName != 'xxx')
            firstNameInput.value = firstName;
        else
            firstNameInput.value = '';

        if (lastName != 'xxx')
            lastNameInput.value = lastName;
        else
            lastNameInput.value = '';

        company = companyInput.value;
        companyInput.value = 'xxx';
    }

    function amCompany() {
        companySection.style.display = 'flex';
        personSection.style.display = 'none';

        companyButton.classList.add('choose-personality__btn--selected');
        personButton.classList.remove('choose-personality__btn--selected');

        isCompanyCheckbox.checked = true;

        if (company !== 'xxx')
            companyInput.value = company;
        else
            companyInput.value = '';

        firstName = firstNameInput.value;
        lastName = lastNameInput.value;

        firstNameInput.value = 'xxx';
        lastNameInput.value = 'xxx';
    }
</script>
