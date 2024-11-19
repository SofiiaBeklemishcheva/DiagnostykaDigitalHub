<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;

class NameInputHelper
{
    /**
     * Walidacja imienia.
     *
     * @param string $name
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validateName($name)
    {
        return Validator::make(['name' => $name], [
            'name' => 'required|string|min:3|max:50',
        ]);
    }
}
