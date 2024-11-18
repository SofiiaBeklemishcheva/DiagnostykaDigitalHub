<div class="{{ $containerClass }}">
    <button 
        @foreach ($attributes as $key => $value)
            {{ $key }}="{{ $value }}"
        @endforeach
        class="btn"
    >
        {{ $label }}
    </button>
</div>
