<link rel="stylesheet" href="{{ asset('css/components/input/date-input.css') }}">
<div class="{{ $inputContainerClass }}">
    <label for="{{ $id }}" class="{{ $inputLabelClass }}">
        {{ $label }}
    </label>
    <input
        type="date"
        id="{{ $id }}"
        name="{{ $name }}"
        value="{{ $value }}"
        class="{{ $inputFieldClass }}"
    />
</div>
