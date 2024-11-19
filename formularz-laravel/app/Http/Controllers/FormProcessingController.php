<?php

namespace App\Http\Controllers;

use App\Services\FormProcessingService;
use Illuminate\Http\Request;

class FormProcessingController extends Controller
{
    protected $formProcessingService;

    // Wstrzykujemy usługę
    public function __construct(FormProcessingService $formProcessingService)
    {
        $this->formProcessingService = $formProcessingService;
    }

    public function submitForm(Request $request)
    {
        // Wywołanie usługi, która zajmuje się walidacją i przetwarzaniem formularza
        $result = $this->formProcessingService->process($request);

        if ($result['status'] === 'error') {
            // Jeśli wystąpiły błędy walidacji, przekazujemy je do widoku
            return back()->withErrors($result['errors']);
        }

        // Komunikat o sukcesie
        return back()->with('success', $result['message']);
    }
}
