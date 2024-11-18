<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\FormViewInterface;
use App\Services\DateInputHelper;

class FormViewController extends Controller implements FormViewInterface
{

    public function showForm()
    {
        return view('form', [
            'maxDate' => DateInputHelper::getMaxDate(),
        ]);
    }
}
