<?php

namespace App\Services;

class DateInputHelper
{
    public static function getMaxDate(): string
    {
        // Maksymalna data: dzisiejsza data
        return now()->toDateString();
    }
}
