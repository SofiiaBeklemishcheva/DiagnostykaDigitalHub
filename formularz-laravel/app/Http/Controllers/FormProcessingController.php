<?php

namespace App\Http\Controllers;

use App\Services\FormProcessingService;
use Illuminate\Http\Request;

class FormProcessingController extends Controller
{
    protected $formProcessingService;


    public function __construct(FormProcessingService $formProcessingService)
    {
        $this->formProcessingService = $formProcessingService;
    }

    public function submitForm(Request $request)
    {

        $result = $this->formProcessingService->process($request);

        if ($result['status'] === 'error') {

            return back()->withErrors($result['errors']);
        }

        return back()->with('success', 'Dane przesłano pomyślnie');

    }

    public function submitCakeOrder(Request $request)
    {
        $validatedData = $request->validate([
            'order_date' => 'required|date|after:today',
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email',
            'biszkopt' => 'required|string|in:vanilla,chocolate,red_velvet',
            'krem' => 'required|string|in:buttercream,whipped_cream,chocolate',
            'nadzienie' => 'required|string|in:fruits,chocolate,cream',
            'waga' => 'required|integer|in:1,2,3,4',
            'budzet' => 'required|string|in:100-200,200-300,300-400',
            'wykonczenie' => 'nullable|string|max:1000',
        ]);

        $result = $this->formProcessingService->process($validatedData);

        if ($result['status'] === 'error') {
            return back()->withErrors($result['errors']);
        }

        return back()->with('success', 'Twoje zamówienie zostało złożone pomyślnie!');
    }
}
