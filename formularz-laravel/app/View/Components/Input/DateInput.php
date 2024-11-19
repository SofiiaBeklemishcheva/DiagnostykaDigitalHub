<?php

namespace App\View\Components\Input;

use App\View\Components\Input\BaseFormInput;


class DateInput extends BaseFormInput
{
    public function render()
    {
        return view('components.input.date-input');
    }
}
