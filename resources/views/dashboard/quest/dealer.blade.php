<x-dashboard-layout title="sprzedawcę" currentTab="dealer" shrink>
    <header class="dashboard__header">
        <i class="fa-solid fa-file-contract dashboard__header-icon"></i>
        <span class="dashboard__header-text">DANE SPRZEDAWCY</span>
    </header>

    <x-dashboard-section-data>
        <x-dashboard-section-data-group key="Sprzedawca" :value="$dealerName">
            <x-slot:icon>
                <i class="fa-solid fa-signature"></i>
            </x-slot:icon>
        </x-dashboard-section-data-group>

        <x-dashboard-section-data-group key="Nazwa kolejki" :value="$queueName">
            <x-slot:icon>
                <i class="fa-solid fa-signature"></i>
            </x-slot:icon>
        </x-dashboard-section-data-group>

        <x-dashboard-section-data-group key="Link do aukcji" :value="$link"
            :hideValue="true">
            <x-slot:icon>
                <i class="fa-solid fa-link"></i>
            </x-slot:icon>

            <x-button small style="width: 75%;
            margin-top: 10px;">
                <a href="{{ $link }}" target="_blank">Otwórz aukcję</a>
                <i class="fa-solid fa-up-right-from-square"></i>
            </x-button>

        </x-dashboard-section-data-group>

    </x-dashboard-section-data>

    <x-button>
        <a href="{{ route('queue.quest.show', request()->segment(2)) }}">
            Zobacz listę
        </a>
        <i class="fa-solid fa-table-cells side-menu__button-icon"></i>
    </x-button>

</x-dashboard-layout>
