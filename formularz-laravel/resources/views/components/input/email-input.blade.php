<div class="{{ $inputContainerClass }}">
    <label for="{{ $id }}" class="{{ $inputLabelClass }}">
        {{ $label }}
    </label>
    <input
        type="email"
        id="{{ $id }}"
        name="{{ $name }}"
        value="{{ $value }}"
        class="{{ $inputFieldClass }}"
    />
</div>