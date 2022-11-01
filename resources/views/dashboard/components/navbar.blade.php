@vite('resources/sass/dashboard/components/navbar.scss')

<nav class="dashboard__navbar">
    <x-logo class="dashboard__logo" />
    <span
        class="dashboard__email dashboard__email--mobile">{{ Auth::user()->email }}</span>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <div class="dashboard__account">
            <span
                class="dashboard__email dashboard__email--desktop">{{ Auth::user()->email }}</span>
            <button type="submit" title="Wyloguj" class="dashboard__logout">
                <i class="fa-solid fa-power-off"></i>
            </button>
        </div>
    </form>
</nav>
