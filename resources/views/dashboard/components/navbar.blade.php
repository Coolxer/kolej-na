@vite('resources/sass/dashboard/components/navbar.scss')

<div class="dashboard__navbar">
    <x-logo class="dashboard__logo" />
    <span class="dashboard__email">{{ Auth::user()->email }}</span>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" title="Wyloguj" class="dashboard__logout">
            <i class="fa-solid fa-power-off"></i>
        </button>
    </form>
</div>
