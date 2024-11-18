<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DateInput extends Component
{
    public $id;
    public $name;
    public $label;
    public $value;
    public $inputFieldClass;
    public $inputLabelClass;
    public $inputContainerClass;

    public function __construct(
        $id,
        $name,
        $label,
        $value = null,
        $inputFieldClass = 'default-input-field',
        $inputLabelClass = 'default-label',
        $inputContainerClass = 'default-container'
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->inputFieldClass = $inputFieldClass;
        $this->inputLabelClass = $inputLabelClass;
        $this->inputContainerClass = $inputContainerClass;
    }

    public function render()
    {
        return view('components.date-input');
    }
}
