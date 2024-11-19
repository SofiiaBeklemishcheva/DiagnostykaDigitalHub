<?php

namespace App\View\Layouts;

use App\View\Components\BaseComponent;

class Header extends BaseComponent
{
    public string $containerClass;
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
        ?string $headerLabelClass = 'default-header-label-class',
        ?string $headerLabel = 'Default Header'
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
