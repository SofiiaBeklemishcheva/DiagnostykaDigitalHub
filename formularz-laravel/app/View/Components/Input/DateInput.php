<?php

namespace App\View\Components;

use Illuminate\View\BaseFormInput;

class DateInput extends BaseFormInput
{
    public function render()
    {
        return view('components.date-input');
    }
}
