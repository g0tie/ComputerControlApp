@props(['type' => 'success', 'message'])

<div class="alert alert-{{ $type }}" role="alert">
    {{ $message }}
</div>
