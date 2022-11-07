@vite('resources/sass/dashboard/profile.scss')

@php
$user = Auth::user();
@endphp

<x-dashboard-layout title="profil" currentTab="profile" shrink>
    <header class="dashboard__header">
        <i class="fa-solid fa-user dashboard__header-icon"></i>
        <span class="dashboard__header-text">MOJE DANE</span>
    </header>

    <div class="user-data">

        @if (!$user->company)
            <div class="user-data__group">
                <span class="user-data__key">Imię</span>
                <span class="user-data__value">{{ $user->first_name }}</span>
                <hr>
            </div>

            <div class="user-data__group">
                <span class="user-data__key">Nazwisko</span>
                <span class="user-data__value">{{ $user->last_name }}</span>
                <hr>
            </div>
        @else
            <div class="user-data__group">
                <span class="user-data__key">Firma</span>
                <span class="user-data__value">{{ $user->company }}</span>
                <hr>
            </div>
        @endif

        <div class="user-data__group">
            <span class="user-data__key">Email</span>
            <span class="user-data__value">{{ $user->email }}</span>
            <hr>
        </div>

    </div>

    <x-button>
        <a href="{{ route('password.change') }}">
            Zmień hasło
        </a>
    </x-button>
</x-dashboard-layout>
