@props(['currentTab' => null])

<x-dashboard-side-menu>
    <a href="{{ $currentTab === 'dealer' ? 'javascript:void(0)' : route('') }}"
        @class([
            'side-menu__button',
            'side-menu__button--selected' => $currentTab === 'dealer',
        ]) title="Dane sprzedawcy"><i
            class="fa-solid fa-shop"></i> <span
            class="side-menu__button-text">Sprzedawca</span></a>
    <a href="{{ $currentTab === 'queue' ? 'javascript:void(0)' : route('') }}"
        @class([
            'side-menu__button',
            'side-menu__button--selected' => $currentTab === 'queue',
        ]) title="Kolejka"><i
            class="fa-solid fa-table-cells side-menu__button-icon"></i>
        <span class="side-menu__button-text">Kolejka</span>
    </a>
    <a href="{{ $currentTab === 'statistics' ? 'javascript:void(0)' : route('') }}"
        @class([
            'side-menu__button',
            'side-menu__button--selected' => $currentTab === 'queue',
        ]) title="Dane statystyczne"><i
            class="fa-solid fa-chart-column"></i>
        <span class="side-menu__button-text">Statystyka</span>
    </a>
</x-dashboard-side-menu>
