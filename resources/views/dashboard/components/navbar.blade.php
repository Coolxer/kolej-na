@vite('resources/sass/dashboard/components/navbar.scss')

@php
$dashboardType = request()->segment(1);
@endphp

<nav class="dashboard__navbar">
    <x-logo class="dashboard__logo" />

    @if ($dashboardType === 'panel')
        <span
            class="dashboard__email dashboard__email--mobile">{{ Auth::user()->email }}</span>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <div class="dashboard__account">
                <span
                    class="dashboard__email dashboard__email--desktop">{{ Auth::user()->email }}</span>
                <button type="submit" title="Wyloguj"
                    class="dashboard__logout-btn">
                    <i class="fa-solid fa-power-off"></i>
                </button>
            </div>
        </form>
    @elseif ($dashboardType === 'kolejka')
        <div class="dashboard__queue">
            <span class="dashboard__queue-label">ID kolejki:</span>
            <span
                class="dashboard__queue-identify">{{ request()->segment(2) }}</span>
        </div>

        @if (Auth::check())
            <a class="dashboard__panel-btn" href="{{ route('dashboard.user') }}"
                title="Panel">
                <i class="fa-solid fa-table-columns"></i>
            </a>
        @endif

    @endif

    @if (Auth::check())
    @endif

</nav>
