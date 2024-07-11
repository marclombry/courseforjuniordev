<?php 
class UserBad
{
    public function create($data)
    {
        if (!isset($data['username']) || !isset($data['password'])) {
            return 'Invalid data';
        }

        $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);

        $db = new PDO('mysql:host=localhost;dbname=testdb', 'root', '');
        $stmt = $db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $stmt->execute([':username' => $data['username'], ':password' => $hashedPassword]);

        return 'User created';
    }
}

$user = new UserBad();
echo $user->create(['username' => 'john_doe', 'password' => 'secret']);

class UserRefactor
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function create(array $data): string
    {
        if (!$this->isValidData($data)) {
            return 'Invalid data';
        }

        $hashedPassword = $this->hashPassword($data['password']);
        $this->saveUser($data['username'], $hashedPassword);

        return 'User created';
    }

    private function isValidData(array $data): bool
    {
        return isset($data['username']) && isset($data['password']);
    }

    private function hashPassword(string $password): string
    {
        return password_hash($password, PASSWORD_DEFAULT);
    }

    private function saveUser(string $username, string $password): void
    {
        $stmt = $this->db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $stmt->execute([':username' => $username, ':password' => $password]);
    }
}

// Dependency injection of the PDO instance
$db = new PDO('mysql:host=localhost;dbname=testdb', 'root', '');
$user = new UserRefactor($db);
echo $user->create(['username' => 'john_doe', 'password' => 'secret']);