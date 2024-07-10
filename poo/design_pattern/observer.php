<?php

interface Subject
{ // Publisher
    public function attach(Observer $observer);
    public function detach($observer);
    public function notify();
}

interface Observer
{ // Subscriber
    public function handle();
}

class Login implements Subject
{
    protected $observers = [];

    public function attach($observable)
    {
        if (is_array($observable)) 
        {
            return $this->attachObservers($observable);
        }

        $this->observers[] = $observable;

        return $this;
    }

    public function detach($index)
    {
        unset($this->observers[$index]);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->handle();
        }
    }

    private function attachObservers($observable)
    {
        foreach ($observable as $observer) {
            if (!$observer instanceof Observer)
                throw new Exception;

            $this->attach($observer);
        }
    }

    public function fire()
    {
        $this->notify();
    }
}

class LogHandler implements Observer
{
    public function handle()
    {
        var_dump('log something');
    }
}

class EmailNotifier implements Observer
{
    public function handle()
    {
        var_dump('notify an email');
    }
}

class LoginReporter implements Observer {
    public function handle()
    {
        var_dump('fire off an email');
    }
}

$login = new Login;
$login->attach([
    new LogHandler,
    new EmailNotifier
]);

$login->fire();