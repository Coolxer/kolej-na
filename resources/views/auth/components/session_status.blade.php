@vite('resources/sass/auth/components/session_status.scss')

@props(['status' => null, 'message' => null])

@error('failed')
    <span class='session-status session-status--error'>{{ $message }}</span>
@enderror

@if ($status and $message)
    @if (session('status') === $status)
        <span class="session-status">{{ $message }}</span>
    @endif
@else
    @if (session('status'))
        <span class="session-status">{{ session('status') }}</span>
    @endif
@endif
