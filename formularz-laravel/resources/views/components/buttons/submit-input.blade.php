<div class="{{ $containerClass }}">
    <button
        {{ $attributes->merge(['class' => 'btn', 'type' => 'submit']) }}
    >
        {{ $label }}
    </button>
</div>
