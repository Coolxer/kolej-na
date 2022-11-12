@props(['currentTab' => null])

@php
$queueID = request()->segment(2);
@endphp

<x-dashboard-side-menu>
    <a href="{{ $currentTab === 'dealer' ? 'javascript:void(0)' : route('dashboard.quest.dealer', $queueID) }}"
        @class([
            'side-menu__button',
            'side-menu__button--selected' => $currentTab === 'dealer',
        ]) title="Dane sprzedawcy"><i
            class="fa-solid fa-shop side-menu__button-icon"></i> <span
            class="side-menu__button-text">Sprzedawca</span></a>
    <a href="{{ $currentTab === 'queue' ? 'javascript:void(0)' : route('queue.quest.show', $queueID) }}"
        @class([
            'side-menu__button',
            'side-menu__button--selected' => $currentTab === 'queue',
        ]) title="Lista"><i
            class="fa-solid fa-table-cells side-menu__button-icon"></i>
        <span class="side-menu__button-text">Lista</span>
    </a>
    <a href="{{ $currentTab === 'statistics' ? 'javascript:void(0)' : route('dashboard.quest.statistics', $queueID) }}"
        @class([
            'side-menu__button',
            'side-menu__button--selected' => $currentTab === 'queue',
        ]) title="Dane statystyczne"><i
            class="fa-solid fa-chart-column side-menu__button-icon"></i>
        <span class="side-menu__button-text">Statystyka</span>
    </a>
</x-dashboard-side-menu>
