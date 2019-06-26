<?php

namespace App\Handlers;

use App\Interfaces\iObserver;

class Logger implements iObserver
{

    /**
     * @return mixed|void
     */
    public function handle()
    {
        var_dump('logging about user registered successfully');
    }
}