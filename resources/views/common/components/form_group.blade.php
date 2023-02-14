@vite('resources/sass/common/components/form_group.scss')

@props(['secondary' => false, 'id', 'label', 'icon' => null, 'type' => 'text', 'errors' => [], 'defaultHoverStyle' => true, 'displayErrors' => true])

<div
    {{ $attributes->class(['form-group', 'form-group--secondary' => $secondary, 'form-group--checkbox' => $type === 'checkbox', 'form-group--hover' => $defaultHoverStyle]) }}>
    <label class="form-group__label"
        for="{{ $id }}">{{ $label }}</label>

    <div class="form-group__row">

        @if ($type === 'textarea')
            <textarea @class([
                'form-group__input',
                'form-group__input--error' => count($errors),
            ]) id="{{ $id }}"
                name="{{ $id }}" {{ $attributes }}>
            </textarea>
        @else
            <input @class([
                'form-group__input',
                'form-group__input--error' => count($errors),
            ]) id="{{ $id }}"
                type="{{ $type }}" name="{{ $id }}"
                {{ $attributes }} />
        @endif

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
