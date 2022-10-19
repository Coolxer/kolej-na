@vite('resources/sass/dashboard/components/action_panel.scss')

@props(['desktop' => false, 'couldAdd' => false, 'couldSave' => false, 'couldCancel' => false, 'couldGoBack' => false])

<div
    {{ $attributes->class(['action-panel', 'action-panel--desktop' => $desktop]) }}>
    <button class="action-panel__button" {{ !$couldAdd ? 'disabled' : null }}><i
            class="fa-solid fa-user-plus"></i></button>
    <button class="action-panel__button" {{ !$couldSave ? 'disabled' : null }}><i
            class="fa-solid fa-floppy-disk"></i></button>
    <button class="action-panel__button"
        {{ !$couldCancel ? 'disabled' : null }}><i
            class="fa-solid fa-ban"></i></button>
    <button class="action-panel__button"
        {{ !$couldGoBack ? 'disabled' : null }}><i
            class="fa-solid fa-angles-left"></i></button>
</div>
