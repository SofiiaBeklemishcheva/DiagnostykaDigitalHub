<link rel="stylesheet" href="{{ asset('css/components/input/select-input.css') }}">
<div class="{{ $containerClass }}">
    <label class="{{ $inputLabelClass }}" for="{{ $id }}">{{ $label }}</label>

    <select id="{{ $id }}" name="{{ $name }}" class="{{ $inputFieldClass }}" {{ $isRequired ? 'required' : '' }}>
        @foreach ($options as $value => $text)
            <option value="{{ $value }}" {{ old($name) == $value ? 'selected' : '' }}>{{ $text }}</option>
        @endforeach
    </select>
</div>
