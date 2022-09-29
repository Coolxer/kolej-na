@php
$title = 'Jak to działa?';
$sentences = ['Sprzedawca zakłada kolejkę i prowadzi aukcję, tak jak dotychczas.', '2. Klient odnajduje aukcję i kontaktuje się w celu złożenia zamówienia', '3. Sprzedawca zapisuje klienta do kolejki i przekazuje mu adres kolejki oraz identyfikator klienta.', 'Sprzedawca zajmuje się procesem obsługi zamówienia i na bieżąco aktualizuje statusy kolejki.', '5. Klient w dowolnym miejscu i czasie sprawdza kolejkę pod wskazanym adresem internetowym. Widzi swoją pozycję w kolejce i statusy innych uczestników.', '6. Zarówno sprzedawca, jak i klient są zadowolenie, bo wszystko jest jasne i transparentne.'];
@endphp

<x-section :title="$title" :sentences="$sentences" :dark="false"
    :imageOnLeftSide="false">
    <x-slot:image>
        <img
            src="{{ Vite::asset('resources/images/illustrations/how_it_works.svg') }}">
    </x-slot:image>
</x-section>
