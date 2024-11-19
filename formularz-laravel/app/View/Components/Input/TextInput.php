<?php
namespace App\View\Components\Input;

use Illuminate\View\Component;

class TextInput extends Component
{
    public $id;
    public $name;
    public $label;
    public $value;
    public $inputContainerClass;
    public $inputLabelClass;
    public $inputFieldClass;
    public bool $isRequired;

    // Konstruktor z parametrami
    public function __construct($id, $name, $label, $value = null, $inputContainerClass = '', $inputLabelClass = '', $inputFieldClass = '', $isRequired = false)
    {
        // Przypisanie wartości do właściwości
        $this->id = $id;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->inputContainerClass = $inputContainerClass;
        $this->inputLabelClass = $inputLabelClass;
        $this->inputFieldClass = $inputFieldClass;
        $this->isRequired = $isRequired; // Domyślnie false
    }

    public function render()
    {
        return view('components.input.text-input');
    }
}
