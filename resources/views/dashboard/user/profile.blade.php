<x-dashboard-layout user title="profil" currentTab="profile" shrink>
    <header class="dashboard__header">
        <i class="fa-solid fa-user dashboard__header-icon"></i>
        <span class="dashboard__header-text">MOJE DANE</span>
    </header>

    <x-dashboard-section-data>
        @if (!$user->company)
            <x-dashboard-section-data-group key="Imię" :value="$user->first_name" />
            <x-dashboard-section-data-group key="Nazwisko" :value="$user->last_name" />
        @else
            <x-dashboard-section-data-group key="Firma" :value="$user->company" />
        @endif
        <x-dashboard-section-data-group key="Email" :value="$user->email" />
    </x-dashboard-section-data>

    <x-button>
        <a href="{{ route('password.change') }}">
            Zmień hasło
        </a>
    </x-button>
</x-dashboard-layout>
