<?php

namespace obpdemo\datetime\Controller;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class DatetimeController extends Controller
{
    public function getTimezone($timezone)
    {
        return Carbon::now($timezone)->toDateTimeString();
    }

}
