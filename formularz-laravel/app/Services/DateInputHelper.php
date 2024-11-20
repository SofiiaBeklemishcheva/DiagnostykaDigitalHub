<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;

class DateInputHelper
{
    /**
     * @return string
     */
    public static function getMaxDate(): string
    {
        return now()->addDays(2)->toDateString();
    }

    /**
     * @param string $date
     * @return bool
     */
    public static function validateDate($date): bool
    {
        $today = now();

        $dateToValidate = \Carbon\Carbon::parse($date);

        return $dateToValidate->isAfter($today->addDays(2));
    }

    /**
     * @param string $date
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function dateValidator($date)
    {
        return Validator::make(['date' => $date], [
            'date' => 'required|date|after:' . now()->addDays(1)->toDateString(),
        ]);
    }
}
