@vite('resources/sass/queue/quest/show.scss')

<x-dashboard-layout title="liste" currentTab="queue">
    <div class="queue-show">

        <div class="queue-show__heading">
            <div class="queue-show__heading-box">

                <div class="queue-show__name-box">
                    <h1 class="queue-show__name-label">Kolej na ...</h1>

                    <h2 class="queue-show__name-value">{{ $name }}</h2>
                </div>
            </div>

            <div class="queue-show__members">
                <span>{{ $customers->count() }}</span>
                <i class="fa-solid fa-users"></i>
            </div>
        </div>

        <div class="queue-show__search-box">
            <x-search-customer-input />
        </div>

        <x-table :customers="$customers" />

        <span id="tableFilteredMessage"
            class="queue-show__table-filtered-message">*Tabela została
            przefiltrowana i może nie być kompletna.</span>

    </div>
</x-dashboard-layout>

<script type="text/javascript" src="{{ URL::asset('js/filterQueueTable.js') }}">
</script>
