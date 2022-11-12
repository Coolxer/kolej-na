<x-dashboard-layout title="sprzedawcę" currentTab="dealer">
    <header class="dashboard__header">
        <i class="fa-solid fa-file-contract dashboard__header-icon"></i>
        <span class="dashboard__header-text">DANE SPRZEDAWCY</span>
    </header>

    <x-dashboard-section-data>
        <x-dashboard-section-data-group key="Kolejka" :value="$queueName" />
        <x-dashboard-section-data-group key="Link" :value="$link" />
        <x-dashboard-section-data-group key="Sprzedawca" :value="$dealerName" />
    </x-dashboard-section-data>

    <x-button>
        <a href="{{ route('queue.quest.show', request()->segment(2)) }}">
            Zobacz listę
        </a>
        <i class="fa-solid fa-table-cells side-menu__button-icon"></i>
    </x-button>

</x-dashboard-layout>
