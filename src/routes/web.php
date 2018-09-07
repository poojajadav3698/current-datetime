<?php

Route::get('timezones/{timezone}', 'obpdemo\datetime\Controller\DatetimeController@getTimezone');
Route::get('hello', function(){
    return "hello";
});
