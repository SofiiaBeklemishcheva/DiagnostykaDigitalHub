<?php

namespace App\View\Components;

class SelectInput extends BaseFormInput
{
    public $options;

    /**
     * Konstruktor komponentu SelectInput.
     *
     * @param array $options - lista opcji select (klucz to wartość, tekst to tekst opcji)
     * @param string|null $value - wartość domyślna
     * @param bool $isRequired - czy pole jest wymagane
     * @param string $inputFieldClass - klasa CSS dla pola input
     * @param string $inputLabelClass - klasa CSS dla etykiety
     * @param string $containerClass - klasa CSS dla kontenera (z `Component`)
     */
    public function __construct(
        $options = [],
        $value = null,
        $isRequired = false,
        $inputFieldClass = 'default-select-class',
        $inputLabelClass = 'default-label-class',
        $containerClass = 'default-container-class'
    ) {
        // Wywołanie konstruktora klasy bazowej, który ustawia wspólne właściwości
        parent::__construct(null, null, null, $value, $isRequired, $inputFieldClass, $inputLabelClass, $containerClass);
        
        // Ustawienie opcji specyficznych dla SelectInput
        $this->options = $options;
    }

    public function render()
    {
        return view('components.select-input');
    }
}
