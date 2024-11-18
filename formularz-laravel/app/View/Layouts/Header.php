<?php

namespace App\View\Components;

class Header extends Component
{
    public $containerClass;
    public $headerLabelClass;
    public $headerLabel;

    /**
     * Konstruktor komponentu Header.
     *
     * @param string|null $containerClass - Klasa CSS dla kontenera
     * @param string|null $headerLabelClass - Klasa CSS dla etykiety nagłówka
     * @param string|null $headerLabel - Etykieta nagłówka
     * @param string $containerClass - Klasa domyślna dla kontenera
     * @param string $headerLabelClass - Klasa domyślna dla etykiety
     */
    public function __construct(
        $containerClass = 'default-container-class',
        $headerLabelClass = 'default-header-label-class',
        $headerLabel = 'Default Header'
    ) {
        $this->containerClass = $containerClass;
        $this->headerLabelClass = $headerLabelClass;
        $this->headerLabel = $headerLabel;
    }

    /**
     * Renderuje widok dla komponentu.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.header');
    }
}
