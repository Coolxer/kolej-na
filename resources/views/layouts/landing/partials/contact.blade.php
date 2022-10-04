@vite('resources/sass/layouts/landing/partials/contact.scss')

@php
$id = 'contact';
$title = 'Kontakt';
@endphp

<x-section :id="$id" :title="$title" imageOnRight className="contact">
    <x-slot:content>
        <h3 class="contact__question">Masz inne pytania?</h3>

        <form class="contact__form form" method="POST" action="/contact">
            @csrf
            <fieldset class="form__fieldset">
                <legend class="form__legend">Skontakuj się z nami!</legend>

                <label for="email" class="form__label">Email</label>
                <input id="email" name="message" type="email"
                    placeholder="Wpisz swój e-mail. Odpiszemy!"
                    class="form__input @error('email') is-invalid @else is-valid @enderror">

                <label for="message" class="form__label">Wiadomość</label>
                <textarea id="message" rows="4" cols="50" maxlength="250"
                    placeholder="Twoja wiadomość. Czekamy na nią!"
                    class="form__input @error('message') is-invalid @else is-valid @enderror"></textarea>

                <x-button className="form__send-btn">
                    <input type="submit" value="Wyślij" />
                    <i class="fa-solid fa-paper-plane"></i>
                </x-button>

            </fieldset>
        </form>
    </x-slot:content>
    <x-slot:image>
        <img src="{{ Vite::asset('resources/images/illustrations/contact.svg') }}"
            alt="">
    </x-slot:image>
</x-section>
