<?php 
/**
 * The Prototype pattern is a creative design pattern that allows you to create new objects by copying existing instances rather 
 * than using a constructor. 
 * This allows you to create new objects while maintaining independence from their concrete class.
 */
interface Prototype
{
    public function clone(): Prototype;
}

class Warrior implements Prototype
{
    private $name;
    private $strength;

    public function __construct(string $name, int $strength)
    {
        $this->name = $name;
        $this->strength = $strength;
    }

    // Méthode de clonage
    public function clone(): Prototype
    {
        return new Warrior($this->name, $this->strength);
    }

    // Getter pour le nom
    public function getName(): string
    {
        return $this->name;
    }

    // Setter pour le nom
    public function setName(string $name)
    {
        $this->name = $name;
    }

    // Getter pour la force
    public function getStrength(): int
    {
        return $this->strength;
    }

    // Setter pour la force
    public function setStrength(int $strength)
    {
        $this->strength = $strength;
    }
}

$warriorPrototype = new Warrior("Warrior", 100);

$warrior1 = $warriorPrototype->clone();
$warrior2 = $warriorPrototype->clone();
/*
$warrior2->setName("Warrior II");
$warrior2->setStrength(120);

echo "Guerrier 1 : " . $warrior1->getName() . ", Force : " . $warrior1->getStrength() . "\n";
echo "Guerrier 2 : " . $warrior2->getName() . ", Force : " . $warrior2->getStrength() . "\n";
*/
?>