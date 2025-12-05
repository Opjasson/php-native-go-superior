<?php
class Hero
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function whoIam()
    {
        return $this->name;
    }
}

class Overiding
{
    public $name;
    public $weapon;
    public $armor;
    public function __construct($name, $weapon, $armor)
    {
        $this->name = $name;
        $this->weapon = $weapon;
        $this->armor = $armor;
    }

    public function whoIam()
    {
        return "Name Hero : {$this->name}<br>Weapon : {$this->weapon}<br>Armor : {$this->armor}";
    }
}

$sniper = new Overiding("Sniper", "Shot Gun", "10");

echo $sniper->whoIam();
