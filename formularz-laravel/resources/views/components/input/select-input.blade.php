<div class="{{ $containerClass }}">
    {!! $this->renderLabel() !!}
    <select id="{{ $id }}" name="{{ $name }}" class="{{ $inputFieldClass }}" {{ $this->renderRequired() }}>
        @foreach ($options as $value => $text)
            <option value="{{ $value }}" {{ $value == $this->value ? 'selected' : '' }}>{{ $text }}</option>
        @endforeach
    </select>
</div>
