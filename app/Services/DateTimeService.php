<?php

namespace App\Services;

use Carbon\Carbon;
use Carbon\CarbonPeriod;

class DateTimeService
{
    protected $req;

    /**
     *
     */
    public function __construct()
    {
    }

    /**==========================================
     *
     *  getMonthsInPeriod()
     *
     ==========================================*/
    public function getMonthsInPeriod()
    {
        $period =CarbonPeriod::create(Carbon::now()->addMonth(-6),  '1 month' , Carbon::now()->addMonths(6) );
        return $period;
    }



}