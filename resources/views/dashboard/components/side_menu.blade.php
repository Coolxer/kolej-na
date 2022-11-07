@vite('resources/sass/dashboard/components/side_menu.scss')

@props(['currentTab' => null])

<div class="side-menu">
    <div class="side-menu__buttons">
        <a href="{{ $currentTab === 'profile' ? 'javascript:void(0)' : route('dashboard.profile') }}"
            @class([
                'side-menu__button',
                'side-menu__button--selected' => $currentTab === 'profile',
            ]) title="Moje dane"><i
                class="fa-solid fa-user side-menu__button-icon"></i> <span
                class="side-menu__button-text">Profil</span></a>
        <a href="{{ $currentTab === 'queue' ? 'javascript:void(0)' : route('dashboard.queue') }}"
            @class([
                'side-menu__button',
                'side-menu__button--selected' => $currentTab === 'queue',
            ]) title="Moje kolejki"><i
                class="fa-solid fa-table-cells side-menu__button-icon"></i>
            <span class="side-menu__button-text">Kolejki</span>
        </a>
        <a href="{{ $currentTab === 'subscription' ? 'javascript:void(0)' : route('dashboard.subscription') }}"
            @class([
                'side-menu__button',
                'side-menu__button--selected' => $currentTab === 'subscription',
            ]) title="Moja subskrypcja"><i
                class="fa-solid fa-file-contract side-menu__button-icon""></i><span
                class="side-menu__button-text">Plan</span></a>
    </div>
</div>
