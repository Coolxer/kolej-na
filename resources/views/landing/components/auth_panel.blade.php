@vite('resources/sass/landing/components/auth_panel.scss')

@props(['desktop' => false])

@if (Auth::check())
    <div @class([
        'auth-panel',
        'auth-panel--mobile' => !$desktop,
        'auth-panel--desktop' => $desktop,
    ])>

        <span class='auth-panel__email' title="{{ Auth::user()->email }}">
            <i class="fa-solid fa-user"></i>
            Zalogowany
        </span>
        <div class="auth-panel__links">
            <a class="auth-panel__link" href="{{ route('dashboard.user') }}"
                title="Panel">
                <i class="fa-solid fa-table-columns"></i>
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="auth-panel__link" type="submit" title="Wyloguj">
                    <i class="fa-solid fa-power-off"></i>
                </button>
            </form>
        </div>
    </div>
@endif
