@vite('resources/sass/landing/partials/navbar.scss')

<header class="navbar">
    <x-logo scrollTo />

    <nav class="navbar__nav">
        <h1 class="navbar__heading">KOLEJ - NA</h1>
        <x-landing-auth-panel />
        <x-menu />
    </nav>

    <button class='navbar__hamburger' onclick="toggle()">
        <i class="fa-solid fa-bars"></i>
    </button>

</header>

<script>
    const nav = document.getElementsByClassName('navbar__nav')[0];
    const hamburger = document.getElementsByClassName(
        'navbar__hamburger')[0];

    let isOpen = false;

    function toggle() {
        isOpen = !isOpen;

        if (isOpen) {
            document.body.style.overflow = "hidden";
            nav.classList.add("navbar__nav--open");
            hamburger.classList.add("navbar__hamburger--open")
        } else {
            document.body.style.overflow = "scroll";
            nav.classList.remove("navbar__nav--open");
            hamburger.classList.remove("navbar__hamburger--open")
        }
    }

    function scroll(section = null) {
        if (isOpen)
            toggle();

        if (section) {
            window.scrollTo({
                behavior: 'smooth',
                top: section.getBoundingClientRect().top -
                    document.body.getBoundingClientRect().top -
                    80,
            });
        } else {
            window.scrollTo({
                top: 0,
                left: 0,
                behavior: 'smooth'
            });
        }
    }
</script>
