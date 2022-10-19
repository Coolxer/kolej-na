@vite('resources/sass/dashboard/components/side_menu.scss')

@props(['currentTab' => 'user'])

<div class="side-menu">
    <div class="side-menu__buttons">
        <button @class([
            'side-menu__button',
            'side-menu__button--selected' => $currentTab === 'user',
        ]) title="Moje dane"><i
                class="fa-solid fa-user"></i></button>
        <button @class([
            'side-menu__button',
            'side-menu__button--selected' => $currentTab === 'queue',
        ]) title="Moje kolejki"><i
                class="fa-solid fa-table-cells"></i>
        </button>
        <button @class([
            'side-menu__button',
            'side-menu__button--selected' => $currentTab === 'subscription',
        ]) title="Mój plan"><i
                class="fa-solid fa-file-contract"></i></button>
    </div>
    <x-action-panel desktop />
</div>
