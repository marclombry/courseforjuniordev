<?php

/**
 * The Decorator pattern is a structural design pattern that allows you to dynamically add behaviors or responsibilities to individual objects
 * without affecting the behavior of other objects of the same class. It allows additional responsibilities to be attached to an object in a 
 * flexible manner and is an alternative to subclassing. The Decorator pattern is a structural design pattern that allows behaviors or 
 * responsibilities to be dynamically added to individual objects without affecting the behavior of other objects of the same class.
 * It allows additional responsibilities to be attached to an object in a flexible manner and is an alternative to subclassing.
 */
class OilChange implements CarService {
    public function __construct(protected CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost() : string
    {
        return 29 + $this->carService->getCost();
    }

    public function getDescription() :string
    {
        return $this->carService->getDescription() . ', and oil change';
    }
}

class TireRotation implements CarService {
    public function __construct(protected CarService $carService)
    {
        $this->carService = $carService;
    }

    
    public function getCost():string
    {
        return 35 + $this->carService->getCost();
    }

    public function getDescription():string
    {
        return $this->carService->getDescription() . ', and oil change';
    }
}

interface CarService {
    public function getCost();
    public function getDescription();
}

class BasicOil implements CarService{
    public function getCost():string
    {
        return 5 ;
    }

    public function getDescription():string
    {
        return 'basic oil';
    }
}
$service = new OilChange(
    (new TireRotation(
        new BasicOil()
    ))
);

var_dump($service->getCost()); // 69 because i added the cost of all the oil to my service