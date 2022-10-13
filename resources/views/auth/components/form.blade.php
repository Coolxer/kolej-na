@vite('resources/sass/auth/components/form.scss')

@props(['action', 'title'])

<form {{ $attributes->merge(['class' => 'auth-form']) }} method="POST"
    action="{{ $action }}">
    @csrf

    <legend class="auth-form__legend">{{ $title }}</legend>

    {{ $slot }}

</form>
