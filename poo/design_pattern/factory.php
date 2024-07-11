<?php

/**
 * The Factory pattern is a creation design pattern that provides an interface for creating objects in a superclass, 
 * but allows subclasses to change the type of objects that will be created. 
 * This pattern is particularly useful when the object creation process is complex or requires conditional logic.
 */

interface Vehicle
{
    public function drive(): string;
}

class Car implements Vehicle
{
    public function drive(): string
    {
        return "Driving a car";
    }
}

class Bike implements Vehicle
{
    public function drive(): string
    {
        return "Riding a bike";
    }
}

abstract class VehicleFactory
{

    abstract public function createVehicle(): Vehicle;

    public function driveVehicle(): string
    {
        $vehicle = $this->createVehicle();
        return $vehicle->drive();
    }
}
class CarFactory extends VehicleFactory
{
    public function createVehicle(): Vehicle
    {
        return new Car();
    }
}

class BikeFactory extends VehicleFactory
{
    public function createVehicle(): Vehicle
    {
        return new Bike();
    }
}

function clientCode(VehicleFactory $factory)
{
    echo $factory->driveVehicle() . "\n";
}

// Client code
$carFactory = new CarFactory();
clientCode($carFactory); // Output: Driving a car

$bikeFactory = new BikeFactory();
clientCode($bikeFactory); // Output: Riding a bike