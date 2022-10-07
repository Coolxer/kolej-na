@vite('resources/sass/auth/components/form_group.scss')

@props(['id', 'label', 'type' => 'text', 'disabled' => false, 'errors' => []])

{{-- <div {{ $attributes->class(['form-group ']) }}">
    <label class="form-group__label"
        for="{{ $id }}">{{ $label ?? $labelSlot }}</label>

    <input
        class="form-group__input @error('{{ $id }}') is-invalid @enderror"
        id="{{ $id }}" type="{{ $type }}"
        name="{{ $id }}" {{ $disabled ? 'disabled' : '' }}
        {{ $attributes }} />

    @error('{{ $id }}')
        <div class="alert alert-danger">{{ }}</div>
    @enderror --}}

<div {{ $attributes->class(['form-group ']) }}">
    <label class="form-group__label"
        for="{{ $id }}">{{ $label ?? $labelSlot }}</label>

    <input class="form-group__input" id="{{ $id }}"
        type="{{ $type }}" name="{{ $id }}"
        {{ $disabled ? 'disabled' : '' }} {{ $attributes }} />

    <!-- potentional errors -->
    @if (count($errors) > 0)
        <ul class="form-group__errors-list">
            @foreach ($errors as $error)
                <li class="form-group__error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>
