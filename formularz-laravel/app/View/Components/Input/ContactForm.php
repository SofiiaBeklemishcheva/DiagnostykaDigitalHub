<?php

namespace App\View\Components\Input;

use Illuminate\View\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $containerClass;

    public function __construct($name = null, $email = null, $containerClass = 'contact-form-container')
    {
        $this->name = $name;
        $this->email = $email;
        $this->containerClass = $containerClass;
    }

    public function render()
    {
        return view('components.forms.contact-form');  // Poprawiona ścieżka
    }

}
