@vite('resources/sass/auth/components/form_group.scss')

@props(['id', 'label', 'icon' => null, 'type' => 'text', 'errors' => [], 'displayErrors' => true])

<div @class(['form-group', 'form-group--checkbox' => $type === 'checkbox'])>
    <label class="form-group__label"
        for="{{ $id }}">{{ $label }}</label>

    <div class="form-group__row">

        <input @class([
            'form-group__input',
            'form-group__input--error' => count($errors),
        ]) id="{{ $id }}"
            type="{{ $type }}" name="{{ $id }}"
            {{ $attributes }} />

        @if ($icon)
            <div class="form-group__icon">
                {{ $icon }}
            </div>
        @endif

    </div>

    @if (count($errors) and $displayErrors)
        <ul class="form-group__errors-list">
            @foreach ($errors as $error)
                <li class="form-group__error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>
