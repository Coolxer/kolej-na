@vite('resources/sass/queue/components/search_customer_input.scss')

<div class='search-customer-input'>
    <x-form-group id="customerSearchID" label="Identyfikator klienta"
        :displayErrors="false" :defaultHoverStyle="false" maxlength="6">
        <x-slot:icon>
            <i class="fa-regular fa-circle-question"
                title="Identyfikator klienta jest  zawsze 6-cio znakowy (liczby i cyfry)."></i>
        </x-slot:icon>
    </x-form-group>
</div>
