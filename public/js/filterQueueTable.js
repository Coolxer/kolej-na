// #################### DECLARATIONS  ####################

// search identyify input
const identifyInput = document.getElementById('customerSearchID');

// queue customers table
const table = document.getElementById('queueTable');

// table customers rows (without header row)
const rows = table.getElementsByTagName('tbody')[0].rows;

// row for message that table is empty
const emptyTableRow = document.getElementById('emptyTableMessage');

// row for message that filtering does not returned data
const notFoundRow = document.getElementById('notFoundMessage');

// message that tables was filtered
const filteredTableInfo = document.getElementById('tableFilteredMessage');

// #################### INIT FUNCTION ####################

// init procedure after view has been loaded
window.addEventListener('load', init);

// basics setups and clears e.g. fields, messages, etc.
function init() {
    // clear search input at start (there may be value from last section)
    identifyInput.value = '';

    // disable search input if queue is empty
    identifyInput.disabled = !rows.length;

    // if table is empty
    if (!rows) {
        // show message that table is empty
        emptyTableRow.style.display = 'table-row';
    } else {
        // subscribe to update input event
        identifyInput.addEventListener('input', filterTable);
    }
}

// #################### FILTER FUNCTION  ####################

// function that filtering table data
function filterTable(e) {
    // get searching identify from input
    const typedIdentify = e.target.value.trim().toLowerCase();

    // at start just hide table message that all rows was hidden, which means no row matching pattern
    notFoundRow.style.display = 'none';

    //  check if identify is not null and if so set data title with (*) and display additional message below the table
    if (typedIdentify) {
        table.caption.innerHTML = 'Lista osób zapisanych w kolejce *';
        filteredTableInfo.style.display = 'inline-block';
    } else {
        // if identity is null display classic table caption without (*) and hide additional message
        table.caption.innerHTML = 'Lista osób zapisanych w kolejce';
        filteredTableInfo.style.display = 'none';

        // there is reset needed for data rows class that matched previous pattern (here is situation if there was pattern but now it is empty, so no filtering at all)
        for (i = 0; i < rows.length; i++)
            rows[i].classList.remove('queue-table__matched');
    }

    //  counter for hidden rows to know if display additional info if all will be hidden
    let hidedRows = 0;

    // iterate through all table rows (in tbody)
    for (i = 0; i < rows.length; i++) {
        // get identify cell of current iterating row
        const currentIdentifyCell = rows[i].getElementsByTagName('td')[1];

        // check if cell is existing (for security)
        if (currentIdentifyCell) {
            // get  value of current cell
            currentIdentifyValue =
                currentIdentifyCell.textContent.toLowerCase();

            // check if cell value matches given pattern (if starts with this pattern)
            if (currentIdentifyValue.startsWith(typedIdentify)) {
                // only if pattern is not empty -> assign matched class to the matched row
                if (typedIdentify.length)
                    rows[i].classList.add('queue-table__matched');

                // remove pottentially existting 'no-matched' class
                rows[i].classList.remove('queue-table__no-matched');
            } else {
                //  if  identify's row does not match given pattern, then hide this row
                rows[i].classList.add('queue-table__no-matched');
                hidedRows++;
            }
        }
    }

    // if all data rows has been hidden then show the 'not found' message
    if (hidedRows === rows.length) notFoundRow.style.display = 'table-row';
}
