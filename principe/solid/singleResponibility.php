<?php 
/**
 * The Single Responsibility Principle (SRP) is one of the five SOLID principles of object-oriented programming. 
 * This principle states that a class should have a single reason to change, that is, 
 * it should only be responsible for a single part of the functionality provided by the software.
 */

/* Bad practice because User class has many responsibilities
class User{
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function save()
    {
        // Logic to save data to database
    }

    public function sendWelcomeEmail()
    {
        // Logic to send a welcome email 
    }
}
*/

/** 
 * Best practice because the responsibilities are shared beetween several classes with only one responsibility per class
 */
class User
{
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}

class UserRepository
{
    public function save(User $user)
    {
        // Logic to save data to database
    }
}

class EmailService
{
    public function sendWelcomeEmail(User $user)
    {
        // Logic to send a welcome email
    }
}

// Utilisation des classes
$user = new User('John Doe', 'john.doe@example.com');
$userRepository = new UserRepository();
$emailService = new EmailService();

$userRepository->save($user);
$emailService->sendWelcomeEmail($user);