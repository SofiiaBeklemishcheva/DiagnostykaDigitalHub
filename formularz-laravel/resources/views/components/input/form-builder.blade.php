<link rel="stylesheet" href="{{ asset('css/components/input/form-builder.css') }}">
<form action="{{ $action }}" method="{{ $method }}">
    @foreach ($fields as $field)
        @if (class_exists($field['component']))
            <x-dynamic-component
                :component="$field['component']"
                :id="$field['id'] ?? null"
                :name="$field['name'] ?? null"
                :label="$field['label'] ?? null"
                :value="$field['value'] ?? null"
                :isRequired="$field['isRequired'] ?? false"
                :inputFieldClass="$field['inputFieldClass'] ?? ''"
                :inputLabelClass="$field['inputLabelClass'] ?? ''"
                :containerClass="$field['containerClass'] ?? ''"
            />
        @else
            <p>Invalid component: {{ $field['component'] }}</p>
        @endif
    @endforeach
</form>
