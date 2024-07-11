<?php 
/**
 * The Mediator pattern is a behavioral design pattern that promotes indirect communication between objects by having them interact through a
 *  centralized mediator object. 
 * This reduces direct dependencies between the components of a system by making them communicate more flexibly through a mediator.
 */

interface ChatMediator
{
    public function sendMessage(string $message, User $user);
}

class ChatRoom implements ChatMediator
{
    private $users = [];

    public function sendMessage(string $message, User $user)
    {
        foreach ($this->users as $u) {
            if ($u !== $user) {
                $u->receiveMessage($message);
            }
        }
    }

    public function addUser(User $user)
    {
        $this->users[] = $user;
    }
}

class User
{
    private $name;
    private $chatMediator;

    public function __construct(string $name, ChatMediator $chatMediator)
    {
        $this->name = $name;
        $this->chatMediator = $chatMediator;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function sendMessage(string $message)
    {
        $this->chatMediator->sendMessage($message, $this);
    }

    public function receiveMessage(string $message)
    {
        echo $this->name . " received message: " . $message . "\n";
    }
}

$chatMediator = new ChatRoom();

$user1 = new User("Alice", $chatMediator);
$user2 = new User("Bob", $chatMediator);
$user3 = new User("Charlie", $chatMediator);

$chatMediator->addUser($user1);
$chatMediator->addUser($user2);
$chatMediator->addUser($user3);

$user1->sendMessage("Hello everyone!"); // Output: Bob received message: Hello everyone! // Charlie received message: Hello everyone!
$user2->sendMessage("Hey there!");     // Output: Alice received message: Hey there! // Charlie received message: Hey there!
$user3->sendMessage("Hi!"); 