@vite('resources/sass/auth/components/form.scss')

@props(['action', 'title' => null])

<form {{ $attributes->merge(['class' => 'auth-form']) }} method="POST"
    action="{{ $action }}">
    @csrf

    @if ($title)
        <legend class="auth-form__legend">{{ $title }}</legend>
    @endif

    {{ $slot }}

</form>
