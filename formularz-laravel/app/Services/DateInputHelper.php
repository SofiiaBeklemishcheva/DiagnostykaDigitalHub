<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;

class DateInputHelper
{
    /**
     * Pobiera maksymalną datę, która jest co najmniej dwa dni później niż dzisiaj.
     *
     * @return string
     */
    public static function getMaxDate(): string
    {
        // Maksymalna data to pojutrze (2 dni od dzisiaj)
        return now()->addDays(2)->toDateString();
    }

    /**
     * Waliduje datę, sprawdzając, czy jest co najmniej dwa dni później niż dzisiaj.
     *
     * @param string $date
     * @return bool
     */
    public static function validateDate($date): bool
    {
        // Pobieramy dzisiejszą datę
        $today = now();

        // Tworzymy obiekt daty z wartości przesyłanej
        $dateToValidate = \Carbon\Carbon::parse($date);

        // Sprawdzamy, czy data jest co najmniej 2 dni później niż dzisiaj
        return $dateToValidate->isAfter($today->addDays(2));
    }

    /**
     * Walidacja daty na zgodność z wymaganym formatem i zakresem.
     *
     * @param string $date
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public static function dateValidator($date)
    {
        // Tworzymy reguły walidacji dla daty
        return Validator::make(['date' => $date], [
            'date' => 'required|date|after:' . now()->addDays(1)->toDateString(), // po dzisiejszym dniu
        ]);
    }
}
