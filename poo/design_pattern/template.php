<?php 

class Burger 
{
    public $burger = [];
    public function make()
    {
        return $this->addBread()->addMeat()->addBread();
    }

    public function addBread()
    {
        var_dump("bread");
        array_push($this->burger,"bread");
        return $this;
    }

    public function addMeat()
    {
        var_dump("meat");
        array_push($this->burger,"meat");
        return $this;
    }
}

$burger = new Burger();
$burger->make();
var_dump($burger->burger);
