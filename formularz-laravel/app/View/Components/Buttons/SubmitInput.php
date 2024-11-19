<?php

namespace App\View\Components\Buttons;

use App\View\Components\BaseComponent;
use Illuminate\View\ComponentAttributeBag;

class SubmitInput extends BaseComponent
{
    public $label;
    public $attributes;

    public function __construct(
        $label = 'Wyślij',
        $attributes = null,  // Przyjmujemy null
        $containerClass = 'default-container'
    ) {
        parent::__construct($containerClass);
        $this->label = $label;
        $this->attributes = $attributes instanceof ComponentAttributeBag
            ? $attributes
            : new ComponentAttributeBag($attributes ?? []); // Używamy ComponentAttributeBag
    }

    public function render()
    {
        return view('components.buttons.submit-input');
    }
}
