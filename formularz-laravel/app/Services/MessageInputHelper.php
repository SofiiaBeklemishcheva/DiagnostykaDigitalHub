<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;

class MessageInputHelper
{
    /**
     * @param string $message
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function validateMessage($message)
    {
        return Validator::make(['message' => $message], [
            'message' => 'required|string|max:500',
        ]);
    }
}
