<?php

namespace App\View\Components\Input;

use Illuminate\View\Component;

class SelectInput extends Component
{
    public $options;
    public $value;
    public $isRequired;
    public $inputFieldClass;
    public $inputLabelClass;
    public $containerClass;
    public $id;
    public $name;
    public $label;

    /**
     * SelectInput constructor.
     *
     * @param array $options - options for the select input.
     * @param string|null $value - selected value.
     * @param string|null $label - label for the select input.
     * @param bool $isRequired - if the field is required.
     * @param string $inputFieldClass - CSS class for the input field.
     * @param string $inputLabelClass - CSS class for the label.
     * @param string $containerClass - CSS class for the container.
     * @param string $id - id for the select input.
     * @param string $name - name for the select input.
     */
    public function __construct(
        array $options = [],
              $value = null,
              $label = null,
              $isRequired = false,
              $inputFieldClass = 'default-select-class',
              $inputLabelClass = 'default-label-class',
              $containerClass = 'default-container-class',
              $id = 'default-select-id',
              $name = null // Dodano name
    ) {
        $this->options = $options;
        $this->value = $value;
        $this->label = $label;
        $this->isRequired = $isRequired;
        $this->inputFieldClass = $inputFieldClass;
        $this->inputLabelClass = $inputLabelClass;
        $this->containerClass = $containerClass;
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * Render the view for the select input.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('components.input.select-input', [
            'options' => $this->options,
            'value' => $this->value,
            'label' => $this->label,
            'isRequired' => $this->isRequired,
            'inputFieldClass' => $this->inputFieldClass,
            'inputLabelClass' => $this->inputLabelClass,
            'containerClass' => $this->containerClass,
            'id' => $this->id,
            'name' => $this->name,
        ]);
    }
}
