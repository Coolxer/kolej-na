@vite('resources/sass/queue/components/queue_box.scss')

@props(['id', 'name', 'link', 'customersCount'])

<div class="queue-box">

    <div class="queue-box__container">
        <div class="queue-box__property">
            <i class="fa-solid fa-signature queue-box__property-icon"></i>
            <span class="queue-box__property-text">{{ $name }}</span>
        </div>

        <div class="queue-box__property">
            <i class="fa-solid fa-fingerprint queue-box__property-icon"></i>
            <span class="queue-box__property-text">{{ $id }}</span>
        </div>

        <div class="queue-box__property">
            <i class="fa-solid fa-users-line queue-box__property-icon"></i>
            <span class="queue-box__property-text">{{ $customersCount }}</span>
        </div>

        <x-button small class="queue-box__button">
            <a href="{{ route('dashboard.queue.edit', $id) }}">Zarządzaj</a>
            <i class="fa-solid fa-pen-to-square"></i>

        </x-button>

        <x-button small class="queue-box__button">
            <a href="{{ route('dashboard.queue.show', $id) }}"">Podgląd</a>
            <i class="fa-solid fa-eye"></i>

        </x-button>
    </div>

</div>
