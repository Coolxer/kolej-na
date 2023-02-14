@vite('resources/sass/queue/index.scss')

<x-dashboard-layout user title="kolejki" currentTab="queue">
    <header class="dashboard__header">
        <i class="fa-solid fa-table-cells dashboard__header-icon"></i>
        <span class="dashboard__header-text">MOJE KOLEJKI</span>
    </header>

    @if (!count($queues))
        <div>
            <i class="fa-solid fa-ban"></i>
            <span>Nie masz żadnych kolejek.</span>
        </div>

        <button class="add-queue-btn" title="Dodaj kolejkę">
            <i class="fa-solid fa-plus add-queue-btn__icon"></i>
            <span>Dodaj kolejkę</span>
        </button>
    @else
        <div class="queues">
            @foreach ($queues as $queue)
                <x-queue-box :id="$queue->identify" :name="$queue->name"
                    :link="$queue->link"
                    customersCount="{{ $queue->customers()->count() }}" />
            @endforeach

            <button class="add-queue-btn" title="Dodaj kolejkę">
                <i class="fa-solid fa-plus add-queue-btn__icon"></i>
                <span>Dodaj kolejkę</span>
            </button>
        </div>
    @endif

</x-dashboard-layout>
