interface Animal {
    void makeSound();
}

class Dog implements Animal {
    @Override
    public void makeSound() {
        System.out.println("Woof woof");
    }
}

abstract class Vehicle {
    abstract void drive();
    
    public void start() {
        System.out.println("Vehicle started");
    }
}

class Car extends Vehicle {
    @Override
    public void drive() {
        System.out.println("Car is driving");
    }
}

public class InterfaceAbstractExample {
    public static void main(String[] args) {
        Animal dog = new Dog();
        dog.makeSound();
        
        Vehicle car = new Car();
        car.start();
        car.drive();
    }
}
