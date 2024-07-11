<?php
/**
 * The chain of responsibility pattern is a behavioral design pattern that allows you to pass a request down a chain of managers. 
 * Each handler can process the request, forward it to the next handler in the chain, or do nothing. 
 * This makes it possible to decouple the sender of the request from its possible receivers, making the system more flexible and extensible.
 */
abstract class HomeChecker {
    protected $successor;

    public abstract function check(HomeStatus $home);

    public function succeedWith(HomeChecker $successor)
    {
        $this->successor = $successor;
    }

    public function next(HomeStatus $home)
    {
        if($this->successor)
        {
            $this->successor->check($home);
        }   
    }
}
class Locks extends HomeChecker {
    public function check(HomeStatus $home)
    {
        if(!$home->locked)
        {
            throw new Exception('The doors are not locked!! Abort abort.');
        }
        $this->next($home);
    }
}

class Lights extends HomeChecker {

    public function check(HomeStatus $home)
    {
        if(!$home->lightsOff)
        {
            throw new Exception("The lights are still on!! Abort  abort.");
        }
        $this->next($home);
    }
}

class Alarm extends HomeChecker {
    public function check(HomeStatus $home)
    {
        if (!$home->alarmOn)
        {
            throw new Exception('The alarm has not been set!! Abort abort.');
        }

        $this->next($home);
    }
}

class HomeStatus {
    public $alarmOn = true;
    public $locked = true;
    public $lightsOff = true;
}

$locks = new Locks;
$lights = new Lights;
$alarm = new Alarm;

$locks->succeedWith($lights);
$lights->succeedWith($alarm);

$locks->check(new HomeStatus);