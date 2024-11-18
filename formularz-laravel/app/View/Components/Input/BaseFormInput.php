<?php

namespace App\View\Components;

abstract class BaseFormInput extends Component
{
    public $id;
    public $name;
    public $label;
    public $value;
    public $isRequired;
    public $inputFieldClass;
    public $inputLabelClass;

    public function __construct(
        $id = null,
        $name = null,
        $label = null,
        $value = null,
        $isRequired = false,
        $inputFieldClass = 'default-input-class',
        $inputLabelClass = 'default-label-class',
        $containerClass = 'default-container-class'
    ) {
        parent::__construct($containerClass);

        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->isRequired = $isRequired;
        $this->inputFieldClass = $inputFieldClass;
        $this->inputLabelClass = $inputLabelClass;
    }
}
