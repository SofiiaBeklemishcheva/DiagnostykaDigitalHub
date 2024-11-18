<?php

namespace App\View\Components;

class SubmitInput extends Component
{
    public $label;
    public $attributes;

    public function __construct(
        $label = 'Submit',
        $attributes = [],
        $containerClass = 'default-container'
    ) {
        parent::__construct($containerClass);
        $this->label = $label;
        $this->attributes = $attributes;
    }

    public function render()
    {
        return view('components.submit-input');
    }
}
