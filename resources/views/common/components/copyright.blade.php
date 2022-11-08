@vite('resources/sass/common/components/copyright.scss')

@props(['margin' => true])

<div @class(['copyright', 'copyright--margin' => $margin])>
    <p class="copyright__sentence">
        Copyright &copy; {{ date('Y') }} Kolej-na. Wszelkie prawa
        zastrzeżone.
    </p>
</div>
