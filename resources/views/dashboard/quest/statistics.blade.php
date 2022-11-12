<x-dashboard-layout title="statystyke" currentTab="statistics">
    <header class="dashboard__header">
        <i class="fa-solid fa-file-contract dashboard__header-icon"></i>
        <span class="dashboard__header-text">DANE STATYSTYCZNE</span>
    </header>

    <x-dashboard-section-data>
        <x-dashboard-section-data-group key="Liczba osób w kolejce"
            :value="$amount" />
        <x-dashboard-section-data-group key="Sprzedawca ostatnio online"
            :value="$latelyOnline" />
    </x-dashboard-section-data>

    <x-button>
        <a href="{{ route('queue.quest.show', request()->segment(2)) }}">
            Zobacz listę
        </a>
        <i class="fa-solid fa-table-cells side-menu__button-icon"></i>
    </x-button>

</x-dashboard-layout>
