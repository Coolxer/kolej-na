@vite('resources/sass/auth/components/form_group.scss')

@props(['id', 'label', 'icon' => null, 'type' => 'text', 'disabled' => false, 'errors' => []])

<div {{ $attributes->class(['form-group ']) }}">
    <label class="form-group__label"
        for="{{ $id }}">{{ $label }}</label>

    <div class="form-group__row">

        @if ($icon)
            <div class="form-group__icon">
                {{ $icon }}
            </div>
        @endif

        <input @class([
            'form-group__input',
            'form-group__input--checkbox' => $type === 'checkbox',
            'form-group__input--error' => count($errors),
        ]) id="{{ $id }}"
            type="{{ $type }}" name="{{ $id }}"
            {{ $disabled ? 'disabled' : '' }} {{ $attributes }} />

    </div>

    @if (count($errors))
        <ul class="form-group__errors-list">
            @foreach ($errors as $error)
                <li class="form-group__error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>
