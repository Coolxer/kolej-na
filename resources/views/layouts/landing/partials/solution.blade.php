@php
$title = 'Rozwiązanie';
$sentences = ['Udostępniamy wirtualny system kolejkowy deficytowych towarów i długotrwałych usług', 'Od teraz lista zamówień nie jest zapisana na kartce i schowana w szufladzie, ale jest dostępna dla klientów w formie aplikacji internetowej.', 'Klient w każdej chwilii może sprawdzić swoją pozycję w kolejce, a także status swojego zamówienia.', 'Co więcej: widzi on także zmieniające się statusy innych osób, a świadomość postępu sprawia, że jest on spokojniejszy i nie telefonuje do sprzedawcy.'];
@endphp

<x-section :title="$title" :sentences="$sentences" :dark="false"
    :imageOnLeftSide="true">
    <x-slot:image>
        <img
            src="{{ Vite::asset('resources/images/illustrations/solution.svg') }}">
    </x-slot:image>
</x-section>