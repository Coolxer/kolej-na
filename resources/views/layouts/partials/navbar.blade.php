@vite('resources/sass/components/navbar.scss')

@php

$menuItems = ['Opis', 'Cennik', 'FAQ', 'Kontakt', 'Logowanie', 'Rejestracja'];

@endphp

<header class="navbar">
    <img src="logo.svg" alt="kolej-na" class="navbar__logo">

    <nav class="navbar__nav">
        <h1 class="navbar__heading">KOLEJ <br \> -NA ...</h1>

        <menu class="navbar__menu">
            @foreach ($menuItems as $item)
                <li class="navbar__menu__item">
                    <a href="{{ $item }}"">
                        {{ $item }}
                    </a>
                </li>
            @endforeach
        </menu>
    </nav>

    <button class='navbar__hamburger' onclick="toggle()">
        <i class="fa-solid fa-bars"></i>
    </button>

</header>

<script>
    const nav = document.getElementsByClassName('navbar__nav')[0];
    const hamburger = document.getElementsByClassName('navbar__hamburger')[0];

    let isOpen = false;

    function toggle() {
        isOpen = !isOpen;

        if (isOpen) {
            nav.classList.add("navbar__nav--open");
            hamburger.classList.add("navbar__hamburger--open")
        } else {
            nav.classList.remove("navbar__nav--open");
            hamburger.classList.remove("navbar__hamburger--open")
        }
    }
</script>
