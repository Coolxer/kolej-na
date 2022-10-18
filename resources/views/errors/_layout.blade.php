@vite('resources/sass/errors/_layout.scss')

@props(['title', 'message'])

<x-layout :title="$title" class="error">
    <div class="error__wrapper">
        <p class="error__header">Wystąpił błąd!</p>

        <i class="fa-regular fa-face-frown error__icon"></i>

        <div class="error__message">
            {{ $message }}
        </div>

        <x-button>
            <a href="javascript:history.back()">Powrót</a>
        </x-button>

    </div>

</x-layout>
