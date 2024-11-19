<link rel="stylesheet" href="{{ asset('css/components/input/text-input.css') }}">
<div class="{{ $inputContainerClass }}">
    <label for="{{ $id }}" class="{{ $inputLabelClass }}">
        {{ $label }}
    </label>
    <input
        type="text"
        id="{{ $id }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        class="{{ $inputFieldClass }}"
        @if(isset($isRequired) && $isRequired) required @endif
    />
</div>
