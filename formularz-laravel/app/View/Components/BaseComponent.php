<?php
namespace App\View\Components;

use Illuminate\View\Component;

abstract class BaseComponent extends Component
{
    public string $containerClass;

    public function __construct(string $containerClass = 'default-container')
    {
        $this->containerClass = $containerClass;
    }

    abstract public function render();
}
