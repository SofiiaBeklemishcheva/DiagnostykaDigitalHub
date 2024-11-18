<?php

namespace App\View\Components;

class Footer extends Component
{
    public $name;
    public $email;
    public $message;

    // Konstruktor komponentu Footer
    public function __construct(
        $name = null,
        $email = null,
        $message = null,
        $containerClass = 'default-footer-container'
    ) {
        parent::__construct($containerClass);
        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    public function render()
    {
        return view('components.footer');
    }
}
