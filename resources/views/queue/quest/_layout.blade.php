@vite('resources/sass/queue/quest/_layout.scss')

@props(['message', 'id' => null])

<x-error-layout title="brak kolejki" :message="$message" :returnBtn="false">
    <div class="queue-quest-error">
        @if ($id)
            <div class="queue-quest-error__id">{{ $id }}</div>
        @endif
        <p class="queue-quest-error__message">Wpisz 6-znakowy identyfikator
            poniżej</p>
        <x-queue-join-input secondary />
    </div>
</x-error-layout>
