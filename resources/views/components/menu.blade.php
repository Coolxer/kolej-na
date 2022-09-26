@vite('resources/sass/menu.scss')

<nav class="absolute h-screen w-full bg-secondary text-dominant">
    <ul class="flex h-full w-full flex-col items-center justify-center">
        <h1>Elko</h1>
        @foreach ($items as $item)
            <li
                class="m-2 flex w-3/4 items-center justify-center rounded-xl bg-accent p-2 text-2xl text-secondary shadow-lg">
                {{ $item }}
            </li>
        @endforeach
    </ul>
</nav>
