<?php
/*
The Interface Segregation Principle (ISP) states that it is better to have several specific interfaces that define specific actions 
rather than a single general interface. 
Clients should not be forced to depend on interfaces they don't use.
*/

/**
 * Bad practice because Robot is forced to implement many methods it doesn't need
 */
interface Workable {
    public function eat();
    public function sleep();
    public function drink();
    public function work();
}

class Robot implements Workable{
    public function eat(){}
    public function sleep(){}
    public function drink(){}
    public function work(){}
}

class Humain implements Workable {
    public function eat(){}
    public function sleep(){}
    public function drink(){}
    public function work(){}
}

/**
 * Best practice, separate interface for each class implementation interface they need
 */

interface Eater {
    public function eat();
}

interface Sleeper {
    public function sleep();
}

interface Drinker {
    public function drink();
}

interface Worker {
    public function work();
}

class HumainWorker implements Eater,Sleeper,Drinker,Worker 
{
    public function eat(){}
    public function sleep(){}
    public function drink(){}
    public function work(){}
}

class RobotWorker implements Worker 
{
    public function work(){}
}