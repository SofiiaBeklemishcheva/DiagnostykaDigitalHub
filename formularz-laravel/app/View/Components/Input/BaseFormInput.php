<?php
namespace App\View\Components\Input;

class BaseFormInput
{
    public $inputContainerClass;
    public $inputLabelClass;
    public $inputFieldClass;
    public $id;
    public $label;
    public $name;
    public $value;

    public function __construct(
        $inputContainerClass = '',
        $inputLabelClass = '',
        $inputFieldClass = '',
        $id = '',
        $label = '',
        $name = '',
        $value = ''
    ) {
        $this->inputContainerClass = $inputContainerClass;
        $this->inputLabelClass = $inputLabelClass;
        $this->inputFieldClass = $inputFieldClass;
        $this->id = $id;
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
    }
}
