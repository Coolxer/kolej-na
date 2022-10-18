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
            <i class="fa-solid fa-rotate-left"></i>
        </x-button>

        <x-button>
            <a href="/">Strona główna</a>
            <i class="fa-solid fa-house"></i>
        </x-button>

    </div>

</x-layout>
