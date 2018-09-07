<?php

namespace obpdemo\datetime;

use Illuminate\Support\ServiceProvider;

class DatetimeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'datetime');
    }

    public function boot()
    {
        require __DIR__ . '/routes/web.php';
    }
}