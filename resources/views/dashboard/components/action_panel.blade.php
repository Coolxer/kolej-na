@vite('resources/sass/dashboard/components/action_panel.scss')

@props(['desktop' => false, 'possibleActions'])

<div
    {{ $attributes->class(['action-panel', 'action-panel--mobile' => !$desktop, 'action-panel--desktop' => $desktop]) }}>
    <button class="action-panel__button" title="Dodaj klienta"
        {{ !$possibleActions[0] ? 'disabled' : null }}><i
            class="fa-solid fa-user-plus"></i></button>
    <button class="action-panel__button" title="Zapisz"
        {{ !$possibleActions[1] ? 'disabled' : null }}><i
            class="fa-solid fa-floppy-disk"></i></button>
    <button class="action-panel__button" title="Anuluj"
        {{ !$possibleActions[2] ? 'disabled' : null }}><i
            class="fa-solid fa-ban"></i></button>
    <button class="action-panel__button" title="Powróć"
        {{ !$possibleActions[3] ? 'disabled' : null }}><i
            class="fa-solid fa-angles-left"></i></button>
</div>
