<?php

namespace App\Interfaces;


interface iObservable
{
    /**
     * @param $observable
     * @return mixed
     */
    public function attach($observable);

    /**
     * @param $index
     * @return mixed
     */
    public function detach($index);

    /**
     * @return mixed
     */
    public function notify();
}