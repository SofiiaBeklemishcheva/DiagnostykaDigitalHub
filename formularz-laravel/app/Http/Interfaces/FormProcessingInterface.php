<?php

namespace App\Http\Controllers;

use App\Services\EmailInputHelper;
use App\Services\NameInputHelper;
use App\Services\MessageInputHelper;
use Illuminate\Http\Request;

class FormProcessingController extends Controller
{
    public function submitForm(Request $request)
    {
        // Walidacja danych przy użyciu helperów
        $emailValidation = EmailInputHelper::validateEmail($request->email);
        $nameValidation = NameInputHelper::validateName($request->name);
        $messageValidation = MessageInputHelper::validateMessage($request->message);

        // Sprawdzenie, czy walidacja zakończyła się sukcesem
        if ($emailValidation->fails() || $nameValidation->fails() || $messageValidation->fails()) {
            // Jeśli którakolwiek walidacja nie powiodła się, przekazujemy błędy
            return back()->withErrors(array_merge(
                $emailValidation->errors()->toArray(),
                $nameValidation->errors()->toArray(),
                $messageValidation->errors()->toArray()
            ));
        }

        // Możesz teraz przetworzyć dane, np. wysłać emaila, zapisać w bazie danych, itp.
        // Przykładowo:
        // Mail::to('admin@example.com')->send(new ContactFormMail($validated));

        return back()->with('success', 'Twoja wiadomość została wysłana!');
    }
}

