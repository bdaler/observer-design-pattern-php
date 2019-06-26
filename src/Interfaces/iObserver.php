<?php

namespace App\Interfaces;


interface iObserver
{
    /**
     * @return mixed
     */
    public function handle();
}