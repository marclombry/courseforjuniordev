<?php 
/**
 * The Singleton pattern is a creational design pattern that ensures that a class has only one instance and 
 * provides a global access point to that instance.
 */

 class Singleton
{
   
    private static $instance;

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct()
    {
    }

    public function doSomething(): void
    {
        echo "Singleton instance doing something...\n";
    }
}


$instance = Singleton::getInstance();
$instance->doSomething(); // Output: Singleton instance doing something...


