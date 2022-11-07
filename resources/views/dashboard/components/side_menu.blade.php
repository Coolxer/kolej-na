@vite('resources/sass/dashboard/components/side_menu.scss')

@props(['currentTab' => null])

<div class="side-menu">
    <div class="side-menu__buttons">
        {{ $slot }}
    </div>
</div>
