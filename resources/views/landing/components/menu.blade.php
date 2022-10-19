@vite('resources/sass/landing/components/menu.scss')

@php

class MenuItem
{
    public $name;
    public $link;
    public $scroll;

    function __construct($name, $link, $scroll = true)
    {
        $this->name = $name;
        $this->link = $link;
        $this->scroll = $scroll;
    }
}

$menuItems = [new MenuItem('Opis', 'why'), new MenuItem('Cennik', 'pricing'), new MenuItem('FAQ', 'faq'), new MenuItem('Kontakt', 'contact')];

if (!Auth::check()) {
    $menuItems = array_merge($menuItems, [new MenuItem('Logowanie', '/logowanie', false), new MenuItem('Rejestracja', '/rejestracja', false)]);
}

@endphp

<menu class="menu">
    @foreach ($menuItems as $item)
        <li class="menu__item">
            @if ($item->scroll)
                <a
                    href="javascript: scroll({{ $item->link }})">{{ $item->name }}</a>
            @else
                <a href="{{ $item->link }}"">
                    {{ $item->name }}
                </a>
            @endif
        </li>
    @endforeach
    <x-landing-auth-panel desktop />
</menu>
