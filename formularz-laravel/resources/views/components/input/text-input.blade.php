<div class="{{ $inputContainerClass }}">
    <label for="{{ $id }}" class="{{ $inputLabelClass }}">
        {{ $label }}
    </label>
    <input
        type="text"
        id="{{ $id }}"
        name="{{ $name }}"
        value="{{ $value }}"
        class="{{ $inputFieldClass }}"
    />
</div>