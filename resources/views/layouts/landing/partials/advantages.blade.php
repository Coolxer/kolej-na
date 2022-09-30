@vite('resources/sass/layouts/landing/advantages.scss')

@php
$id = 'advantages';
$sellerAdvantages = ['Większa kontrola nad listą i biznesem', 'Sprawne informowanie klientów', 'Więcej zadowolonych klientów', 'Optymalizacja pracy', 'Oszczędność czasu'];
$clientAdvantages = ['Świadomość postępu lub jego braku', 'Znajomość aktualnego statusu zamówenia', 'Szybkie i wygodne monitorowanie zlecenia', 'Możliwość szacowania czasu świadczenia usług innych klientów', 'Oszczędność czasu, nerwów i pieniędzy'];
@endphp

<x-section :id="$id" :dark="true" className="advantages">
    <x-section-box title="Korzyści dla sprzedawcy" :sentences="$sellerAdvantages"
        imagePlacement="inner" className="advantages__seller">
        <x-slot:image>
            <img
                src="{{ Vite::asset('resources/images/illustrations/seller_advantages.svg') }}">
        </x-slot:image>
    </x-section-box>

    <x-section-box title="Korzyści dla klientów" :sentences="$clientAdvantages"
        imagePlacement="inner" className="advantages__client">
        <x-slot:image>
            <img
                src="{{ Vite::asset('resources/images/illustrations/client_advantages.svg') }}">
        </x-slot:image>
    </x-section-box>
</x-section>
