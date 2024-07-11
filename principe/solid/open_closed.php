<?php 
/*
The Open/Closed Principle (OCP) states that software modules (classes, functions, etc.) must be open to extension but closed to modification. 
In other words, it should be possible to add new functionality to an existing class without modifying its source code.
*/

/* Bad practice because if I want to change the salary of a job, I have to change my method every time I want to add a new salary*/
class Employee {

    public static function CalculSalary($job)
    {
        if($job =='Developer') {
            return "80K";
        }

        if($job == 'Manager') {
            return "85K";
        }
        // other code ...
    }
}

/**Good practice because polymorphism helps us when we want to change the salary calculation functionality
* if I want to change this method, I just need to create a new class, implement the SalaryCalculator interface and adapt the method
*/

interface SalaryCalculator {
    public function calculateSalary(); 
}

class DeveloperSalary implements SalaryCalculator
{
    public function calculateSalary()
    {
        return "80K";
    }
}

class ManagerSalary implements SalaryCalculator
{
    public function calculateSalary()
    {
        return "85K";
    }
}