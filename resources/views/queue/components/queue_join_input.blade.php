@vite('resources/sass/queue/components/queue_join_input.scss')

@props(['routeName'])

<form method="POST" action="{{ route($routeName) }}">
    @csrf
    <div class="queue-join">

        <x-form-group id="queueID" label="Numer kolejki" :displayErrors="false"
            :defaultHoverStyle="false" minlength="6" maxlength="6">
            <x-slot:icon>
                <i class="fa-regular fa-circle-question"
                    title="Numer kolejki to zawsze 6 znakowy (liczby i cyfry) identyfikator."></i>
            </x-slot:icon>
        </x-form-group>

        <button class="queue-join__form-btn" type="submit"
            title="Sprawdź kolejkę">
            <i class="fa-solid fa-fingerprint queue-join__form-btn-icon"></i>
        </button>

    </div>
</form>

<script>
    let queueIdInput = document.getElementById('queueID');
    let queueSearchBtn = document.getElementsByClassName(
        'queue-join__form-btn')[0];

    if (!queueIdInput.value.trim())
        queueSearchBtn.disabled = true;

    queueIdInput.addEventListener('input', changeQueueId);

    function changeQueueId(e) {
        if (!queueIdInput.checkValidity() || !queueIdInput.value.trim())
            queueSearchBtn.disabled = true;
        else
            queueSearchBtn.disabled = false;
    }
</script>
