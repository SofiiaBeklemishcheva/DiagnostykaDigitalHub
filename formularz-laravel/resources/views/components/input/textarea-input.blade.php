<div class="{{ $inputContainerClass }}">
    <label for="{{ $id }}" class="{{ $inputLabelClass }}">
        {{ $label }}
    </label>
    <input
        type="textarea"
        id="{{ $id }}"
        name="{{ $name }}"
        value="{{ $value }}"
        class="{{ $inputFieldClass }}"
    />
</div>