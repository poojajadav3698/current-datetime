<?php

namespace obpdemo\datetime\Controller;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class DatetimeController extends Controller
{
    public function getTimezone($timezone = NULL)
    {
//        return Carbon::now($timezone)->toDateTimeString();
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('datetime::time', compact('current_time'));
    }


}
