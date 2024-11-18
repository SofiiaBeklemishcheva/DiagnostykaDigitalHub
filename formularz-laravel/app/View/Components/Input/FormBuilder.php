<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormBuilder extends Component
{
    public $action;
    public $method;
    public $fields;

    public function __construct($action, $method = 'POST', $fields = [])
    {
        $this->action = $action;
        $this->method = $method;
        $this->fields = $fields;
    }

    public function render()
    {
        return view('components.form-builder');
    }
}
