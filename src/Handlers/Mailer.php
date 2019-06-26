<?php

namespace App\Handlers;

use App\Interfaces\iObserver;

class Mailer implements iObserver
{

    /**
     * @return mixed|void
     */
    public function handle()
    {
        var_dump('sending mail about user registered successfully');
    }
}