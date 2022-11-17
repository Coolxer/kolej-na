@vite('resources/sass/queue/components/table.scss')

@props(['customers' => null])

<table id="queueTable" class="queue-table">
    <caption>
        Lista osób zapisanych w kolejce
    </caption>
    <thead>
        <tr>
            <th><i class="fa-solid fa-arrow-down-1-9"></i> Lp.</th>
            <th><i class="fa-solid fa-hashtag"></i> ID</th>
            <th><i class="fa-solid fa-list-check"></i> Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)
            <tr @class([
                'queue-table__row',
                'queue-table__row--crossed-out' => $customer->status === 'done',
            ])>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $customer->identify }}</td>
                <td>{{ $customer->status }}
                    @if ($customer->status === 'waiting')
                        <i class="fa-solid fa-spinner"></i>
                    @elseif($customer->status === 'inprogress')
                        <i class="fa-solid fa-person-digging"></i>
                    @elseif ($customer->status === 'delivery')
                        <i class="fa-solid fa-truck"></i>
                    @elseif($customer->status === 'done')
                        <i class="fa-solid fa-circle-check"></i>
                    @endif
                </td>
            </tr>
        @endforeach

    </tbody>

    <tr id="emptyTableMessage" class="queue-table__error">
        <td colspan="3"> Brak osób w kolejce.</td>
    </tr>

    <tr id="notFoundMessage" class="queue-table__warning">
        <td colspan="3">Nie znaleziono pozycji spełniających kryterium.
        </td>
    </tr>

</table>
