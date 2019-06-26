<?php

namespace App;


use App\Interfaces\iObservable;
use App\Interfaces\iObserver;

class Login implements iObservable
{

    /**
     * @var array
     */
    private $observers = [];

    /**
     * @param $observable
     * @return mixed|void
     * @throws \Exception
     */
    public function attach($observable)
    {
        if (is_array($observable)){
            return $this->attachObservers($observable);
        }

        $this->observers[] = $observable;

        return $this;
    }

    /**
     * @param $index
     * @return mixed|void
     */
    public function detach($index)
    {
        unset($this->observers[$index]);
    }

    /**
     * @return mixed|void
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->handle();
        }
    }

    /**
     * @param array $observable
     * @throws \Exception
     */
    private function attachObservers(array $observable)
    {
        foreach ($observable as $observer){

            if ( ! $observer instanceof iObserver) {
                throw new \Exception;
            }

            $this->attach($observer);
        }
    }

    public function register()
    {
        //тут происходит какая то магия и регистрация пользователя. :)


        $this->notify();
    }
}