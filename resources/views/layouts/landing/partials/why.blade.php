@php
$id = 'why';
$title = 'Dlaczego?';
$sentences = ['Duży popyt i mała podaż lub zerwane łańcuchy dostaw powodują powstawanie kolejek.', 'Nawet jeśli towar nie jest deficytowy, to istnieją długotrwałe usługi, na które trzeba długo czekać, a aktualny status nie jest znany', 'Jeśli nie ma systemu monitorowania postępu, to kontakt między stronami kuleje.', 'Brak informowania klienta o statusie i postępie kolejki prowadzi do nerwowych relacji obu stron i utraty czasu z powodu kontaktu telefonicznego, a nawet do zerwania współpracy!'];
@endphp

<x-section :id="$id" :title="$title" :sentences="$sentences">
    <x-slot:image>
        {{-- <img src="{{ Vite::illustrations('lost.svg') }}" alt="lost-image"> --}}
        <img src="{{ Vite::asset('resources/images/illustrations/lost.svg') }}">
    </x-slot:image>
</x-section>
