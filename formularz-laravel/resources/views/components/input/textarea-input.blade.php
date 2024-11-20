<link rel="stylesheet" href="{{ asset('css/components/input/textarea-input.css') }}">
<div class="{{ $inputContainerClass }}">
    <label for="{{ $id }}" class="{{ $inputLabelClass }}">
        {{ $label }}
    </label>
    <textarea
        id="{{ $id }}"
        name="{{ $name }}"
        class="{{ $inputFieldClass }}"
        @if($isRequired) required @endif
    >{{ $value }}</textarea>
</div>

