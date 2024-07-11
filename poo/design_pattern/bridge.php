<?php 
/**
 * The Bridge pattern is a structural design pattern that allows you to separate an abstraction from an implementation 
 * so that they can evolve differently from each other. This pattern is particularly useful when there are variations in abstractions 
 * and implementations, and both need to be able to be extended without being mutually dependent.
 */
interface Color
{
    public function applyColor();
}

class RedColor implements Color
{
    public function applyColor()
    {
        echo "Applying red color.";
    }
}

class BlueColor implements Color
{
    public function applyColor()
    {
        echo "Applying blue color.";
    }
}

abstract class Shape
{
    protected $color;

    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    abstract public function draw();
}

class Circle extends Shape
{
    public function draw()
    {
        echo "Drawing Circle. ";
        $this->color->applyColor();
    }
}

class Square extends Shape
{
    public function draw()
    {
        echo "Drawing Square. ";
        $this->color->applyColor();
    }
}

$red = new RedColor();
$blue = new BlueColor();

$redCircle = new Circle($red);
$blueCircle = new Circle($blue);

$redSquare = new Square($red);
$blueSquare = new Square($blue);

$redCircle->draw(); // Drawing Circle. Applying red color.
$blueCircle->draw(); // Drawing Circle. Applying blue color.

$redSquare->draw(); // Drawing Square. Applying red color.
$blueSquare->draw(); // Drawing Square. Applying blue color.