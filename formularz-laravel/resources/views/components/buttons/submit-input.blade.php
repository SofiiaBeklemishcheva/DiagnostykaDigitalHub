<link rel="stylesheet" href="{{ asset('css/components/buttons/submit-input.css') }}">
<div class="{{ $containerClass }}">
    <button
        {{ $attributes->merge(['class' => 'btn', 'type' => 'submit']) }}
    >
        {{ $label }}
    </button>
</div>
