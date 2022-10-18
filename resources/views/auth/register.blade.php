@vite('resources/sass/auth/register.scss')

<x-auth-layout title="rejestrację" class="register">
    <x-slot:image>
        <img src="{{ Vite::asset('resources/images/illustrations/register.svg') }}"
            alt="">
    </x-slot:image>

    <x-slot:form>
        <x-form class="register-form" action="{{ route('register') }}"
            title="REJESTRACJA">

            <x-choose-personality />

            <input class="register-form__is-company" id="is_company"
                name="is_company" type="checkbox"
                {{ !empty(old('is_company')) ? 'checked' : '' }} hidden />

            <div class="register-form__names">

                {{--  Imię --}}
                <x-form-group id="first_name" label="* Imię" maxlength="50"
                    :value="old('first_name')" :errors="$errors->get('first_name')">
                    <x-slot:icon>
                        <i class="fa-solid fa-signature"></i>
                    </x-slot:icon>
                </x-form-group>

                {{--  Nazwisko --}}
                <x-form-group id="last_name" label="* Nazwisko" maxlength="50"
                    :value="old('last_name')" :errors="$errors->get('last_name')">
                    >
                    <x-slot:icon>
                        <i class="fa-solid fa-signature"></i>
                    </x-slot:icon>
                </x-form-group>

            </div>

            {{--  Company --}}
            <div class="register-form__company">
                <x-form-group c id="company" label="* Nazwa firmy"
                    maxlength="50" :value="old('company')" :errors="$errors->get('company')">>
                    <x-slot:icon>
                        <i class="fa-regular fa-building"></i>
                    </x-slot:icon>
                </x-form-group>
            </div>

            {{--  Email --}}
            <x-form-group id="email" label="* Email" maxlength="255"
                :value="old('email')" :errors="$errors->get('email')">
                <x-slot:icon>
                    <i class="fa-solid fa-at"></i>
                </x-slot:icon>
            </x-form-group>

            {{-- Password  --}}
            <x-form-group id="password" label="* Hasło" type="password"
                maxlength="255" :errors="$errors->get('password')">
                <x-slot:icon>
                    <i class="fa-solid fa-lock"></i>
                </x-slot:icon>
            </x-form-group>

            {{-- Confirm Password  --}}
            <x-form-group id="password_confirmation" label="* Powtórzenie hasła"
                type="password" maxlength="255" :errors="$errors->get('password_confirmation')">
                <x-slot:icon>
                    <i class="fa-solid fa-lock"></i>
                </x-slot:icon>
            </x-form-group>

            <div class="register-form__consents">
                {{-- Terms of service --}}
                <x-form-group id="terms_of_service" type="checkbox"
                    :checked="old('terms_of_service')" :errors="$errors->get('terms_of_service')" :displayErrors="false">

                    <x-slot:label>
                        * Akceptuję
                        <a class="register-form__document-link"
                            href="/regulamin" target="_blank">
                            regulamin
                        </a>
                    </x-slot:label>

                </x-form-group>

                {{-- Policy --}}
                <x-form-group id="policy" type="checkbox" :checked="old('policy')"
                    :errors="$errors->get('policy')" :displayErrors="false">

                    <x-slot:label>
                        * Akceptuję
                        <a class="register-form__document-link"
                            href="/polityka-prywatnosci" target="_blank">
                            politykę prywatności
                        </a>
                    </x-slot:label>

                </x-form-group>
            </div>

            @if ($errors->get('terms_of_service') or $errors->get('policy'))
                <div class="register-form__document-errors">
                    @error('terms_of_service')
                        <p class="register-form__failed-message">{{ $message }}
                        </p>
                    @enderror

                    @error('policy')
                        <p class="register-form__failed-message">{{ $message }}
                        </p>
                    @enderror
                </div>
            @endif

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
        'register-form__names'
    )[0];
    const companySection = document.getElementsByClassName(
        'register-form__company'
    )[0];

    const personButton = document.getElementById(
        'choose-personality__person-btn');
    const companyButton = document.getElementById(
        'choose-personality__company-btn'
    );
    const isCompanyCheckbox = document.getElementById('is_company');

    if (isCompanyCheckbox.checked)
        amCompany();
    else
        amPerson();

    function amPerson() {
        personSection.style.display = 'flex';
        companySection.style.display = 'none';

        personButton.classList.add('choose-personality__btn--selected');
        companyButton.classList.remove('choose-personality__btn--selected');

        isCompanyCheckbox.checked = false;
    }

    function amCompany() {
        companySection.style.display = 'flex';
        personSection.style.display = 'none';

        companyButton.classList.add('choose-personality__btn--selected');
        personButton.classList.remove('choose-personality__btn--selected');

        isCompanyCheckbox.checked = true;
    }
</script>
