<?php

namespace App\View\Components;

use Illuminate\View\Component;

abstract class Component extends Component
{
    
    public $containerClass;

    /**
     *
     * @param string $containerClass - Klasa CSS dla kontenera (wymagana).
     */
    public function __construct($containerClass = 'default-container')
    {
        $this->containerClass = $containerClass;
    }

    /**
     * Metoda renderująca komponent.
     * Klasa pochodna musi implementować tę metodę.
     *
     * @return string
     */
    abstract public function render();
}
