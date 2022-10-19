@vite('resources/sass/common/components/copyright.scss')

<div {{ $attributes->merge(['class' => 'copyright']) }}>
    <p class="copyright__sentence">
        Copyright &copy; {{ date('Y') }} Kolej-na. Wszelkie prawa
        zastrzeżone.
    </p>
</div>
