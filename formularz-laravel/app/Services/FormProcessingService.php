<?php

namespace App\Services;

use App\Services\EmailInputHelper;
use App\Services\NameInputHelper;
use App\Services\MessageInputHelper;
use Illuminate\Support\Facades\Validator;

class FormProcessingService
{
    public function process($data)
    {
        $emailValidation = EmailInputHelper::validateEmail($data['customer_email']);
        $nameValidation = NameInputHelper::validateName($data['customer_name']);
        $messageValidation = MessageInputHelper::validateMessage($data['wykonczenie']);

        if ($emailValidation->fails() || $nameValidation->fails() || $messageValidation->fails()) {
            return [
                'status' => 'error',
                'errors' => array_merge(
                    $emailValidation->errors()->toArray(),
                    $nameValidation->errors()->toArray(),
                    $messageValidation->errors()->toArray()
                ),
            ];
        }
        return [
            'status' => 'success',
            'message' => 'Twoja wiadomość została wysłana!',
        ];
    }

}
