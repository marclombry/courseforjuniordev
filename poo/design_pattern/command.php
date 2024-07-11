<?php 
/*
The Command pattern is a behavioral design pattern that transforms a request into an independent object,
allowing you to configure objects with operations to perform. 
This pattern allows you to decouple the object that sends a request from the object that executes this request, 
by encapsulating the details of the execution in a separate class.
*/
interface Command
{
    public function execute();
    public function undo();
}

class Light
{
    public function on()
    {
        echo "Light is on\n";
    }

    public function off()
    {
        echo "Light is off\n";
    }
}

class LightOnCommand implements Command
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->on();
    }

    public function undo()
    {
        $this->light->off();
    }
}

class LightOffCommand implements Command
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->off();
    }

    public function undo()
    {
        $this->light->on();
    }
}

class RemoteControl
{
    private $command;

    public function setCommand(Command $command)
    {
        $this->command = $command;
    }

    public function pressButton()
    {
        $this->command->execute();
    }

    public function pressUndo()
    {
        $this->command->undo();
    }
}

$light = new Light();
$lightOn = new LightOnCommand($light);
$lightOff = new LightOffCommand($light);

$remote = new RemoteControl();

$remote->setCommand($lightOn);
$remote->pressButton(); // Light is on
$remote->pressUndo(); // Light is off

$remote->setCommand($lightOff);
$remote->pressButton(); // Light is off
$remote->pressUndo(); // Light is on
