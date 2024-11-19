<?php

namespace App\Services;

use App\Services\EmailInputHelper;
use App\Services\NameInputHelper;
use App\Services\MessageInputHelper;
use Illuminate\Support\Facades\Validator;

class FormProcessingService
{
    public function process($request)
    {
        // Walidacja danych przy użyciu helperów
        $emailValidation = EmailInputHelper::validateEmail($request->email);
        $nameValidation = NameInputHelper::validateName($request->name);
        $messageValidation = MessageInputHelper::validateMessage($request->message);

        // Zwracamy błędy, jeśli którakolwiek walidacja się nie powiedzie
        if ($emailValidation->fails() || $nameValidation->fails() || $messageValidation->fails()) {
            return [
                'status' => 'error',
                'errors' => array_merge(
                    $emailValidation->errors()->toArray(),
                    $nameValidation->errors()->toArray(),
                    $messageValidation->errors()->toArray()
                )
            ];
        }

        // Możemy dodać logikę przetwarzania danych (np. wysyłanie e-maila)
        // Mail::to('admin@example.com')->send(new ContactFormMail($request));

        return [
            'status' => 'success',
            'message' => 'Twoja wiadomość została wysłana!'
        ];
    }
}
