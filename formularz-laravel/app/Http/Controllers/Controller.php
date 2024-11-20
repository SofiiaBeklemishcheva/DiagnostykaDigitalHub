<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected function errorResponse(string $message, int $status = 400): \Illuminate\Http\JsonResponse
    {
        return response()->json(['error' => $message], $status);
    }
}
