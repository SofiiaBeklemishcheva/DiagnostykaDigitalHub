<link rel="stylesheet" href="{{ asset('css/components/input/email-input.css') }}">
<div class="{{ $inputContainerClass }}">
    <label for="{{ $id }}" class="{{ $inputLabelClass }}">
        {{ $label }}
    </label>
    <input
        type="email"
        id="{{ $id }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        class="{{ $inputFieldClass }}"
        @if($isRequired) required @endif
    />
</div>
