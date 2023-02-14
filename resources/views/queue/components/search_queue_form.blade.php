@vite('resources/sass/queue/components/search_queue_form.scss')

@props(['secondary' => false])

<form method="POST" action="{{ route('queue.quest.search') }}">
    @csrf

    <div @class([
        'search-queue-form',
        'search-queue-form--secondary' => $secondary,
    ])>
        <x-form-group id="queueSearchID" label="Numer kolejki" :displayErrors="false"
            :defaultHoverStyle="false" minlength="6" maxlength="6">
            <x-slot:icon>
                <i class="fa-regular fa-circle-question"
                    title="Numer kolejki to zawsze 6 znakowy (liczby i cyfry) identyfikator."></i>
            </x-slot:icon>
        </x-form-group>

        <button class="search-queue-form__btn" type="submit"
            title="Sprawdź kolejkę">
            <i class="fa-solid fa-fingerprint search-queue-form__btn-icon"></i>
        </button>

    </div>
</form>

<script>
    let searchQueueInput = document.getElementById('queueSearchID');
    let searchBtn = document.getElementsByClassName(
        'search-queue-form__btn')[0];

    if (!searchQueueInput.value.trim())
        searchBtn.disabled = true;

    searchQueueInput.addEventListener('input', changeQueueValue);

    function changeQueueValue(e) {
        if (!searchQueueInput.checkValidity() || !searchQueueInput.value.trim())
            searchBtn.disabled = true;
        else
            searchBtn.disabled = false;
    }
</script>
