<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;

class EmailInputHelper
{
    /**
     * @param string $email
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validateEmail($email)
    {
        return Validator::make(['email' => $email], [
            'email' => 'required|email|max:255',
        ]);
    }
}
