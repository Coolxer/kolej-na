@php
$id = 'how-it-works';
$title = 'Jak to działa?';
$sentences = ['1. Sprzedawca zakłada kolejkę i prowadzi aukcję, tak jak dotychczas.', '2. Klient odnajduje aukcję i kontaktuje się w celu złożenia zamówienia.', '3. Sprzedawca zapisuje klienta do kolejki i przekazuje mu adres kolejki oraz identyfikator klienta.', '4. Sprzedawca zajmuje się procesem obsługi zamówienia i na bieżąco aktualizuje statusy kolejki.', '5. Klient w dowolnym miejscu i czasie sprawdza kolejkę pod wskazanym adresem internetowym. Widzi swoją pozycję w kolejce i statusy innych uczestników.', '6. Zarówno sprzedawca, jak i klient są zadowoleni, bo wszystko jest jasne i transparentne.'];
@endphp

<x-section :id="$id" :title="$title" :sentences="$sentences">
    <x-slot:image>
        <img
            src="{{ Vite::asset('resources/images/illustrations/how_it_works.svg') }}">
    </x-slot:image>
</x-section>
