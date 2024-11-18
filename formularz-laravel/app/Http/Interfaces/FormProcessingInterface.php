<?php

namespace App\Http\Interfaces;

use Illuminate\Http\Request;

interface FormProcessingInterface
{
    public function submitForm(Request $request);
}
