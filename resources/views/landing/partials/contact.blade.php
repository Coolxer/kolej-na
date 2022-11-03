@vite('resources/sass/landing/partials/contact.scss')

@php
$id = 'contact';
$title = 'Kontakt';
@endphp

<x-section :id="$id" :title="$title" imageOnRight class="contact">
    <x-slot:content>

        <h3 class="contact__question">Masz inne pytania?</h3>

        <x-form class="contact__form" action="/contact">

            <legend class="contact__form-legend">Skontakuj się z nami!</legend>

            <x-session-status />

            {{--  Email --}}
            <x-form-group secondary id="email" label="Email"
                :value="old('email')" maxlength="50" :errors="$errors->get('email')"
                placeholder="Wpisz swój e-mail. Odpiszemy!">
                <x-slot:icon>
                    <i class="fa-solid fa-at"></i>
                </x-slot:icon>
            </x-form-group>

            {{-- Message --}}
            <x-form-group secondary id="message" type="textarea"
                label="Wiadomość" maxlength="255" :errors="$errors->get('message')"
                rows="4" cols="50"
                placeholder="Twoja wiadomość. Czekamy na nią!">
                <x-slot:icon>
                    <i class="fa-regular fa-message"></i>
                </x-slot:icon>
            </x-form-group>

            <x-button class="form__send-btn">
                <input type="submit" value="Wyślij" />
                <i class="fa-solid fa-paper-plane"></i>
            </x-button>
        </x-form>
    </x-slot:content>

    <x-slot:image>
        <img src="{{ Vite::asset('resources/images/illustrations/contact.svg') }}"
            alt="">
    </x-slot:image>

</x-section>
