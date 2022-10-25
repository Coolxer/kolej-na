<x-dashboard-layout title="profil" currentTab="profile">
    <x-form action="{{ route('update-password') }}" title="ZMIANA HASŁA"
        style="height: 100%;">

        <x-session-status />

        {{-- Old password  --}}
        <x-form-group id="old_password" label="Stare hasło" type="password"
            maxlength="255" :errors="$errors->get('old_password')">
            <x-slot:icon>
                <i class="fa-solid fa-lock"></i>
            </x-slot:icon>
        </x-form-group>

        {{-- New password  --}}
        <x-form-group id="new_password" label="Nowe hasło" type="password"
            maxlength="255" :errors="$errors->get('new_password')">
            <x-slot:icon>
                <i class="fa-solid fa-lock"></i>
            </x-slot:icon>
        </x-form-group>

        {{-- Confirm new password  --}}
        <x-form-group id="confirm_new_password" label="Powtórzenie nowego hasła"
            type="password" maxlength="255" :errors="$errors->get('confirm_new_password')">
            <x-slot:icon>
                <i class="fa-solid fa-lock"></i>
            </x-slot:icon>
        </x-form-group>

        {{-- Submit button --}}
        <x-button>
            <input type="submit" value="Zmień hasło" />
            <i class="fa-solid fa-arrows-rotate"></i>

        </x-button>

        <x-button secondary>
            <a href="/panel/profil">
                Moje dane
            </a>
            <i class="fa-solid fa-user"></i>
        </x-button>

    </x-form>

</x-dashboard-layout>
