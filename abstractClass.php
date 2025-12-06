<?php

abstract class ParentClass
{
    abstract public function SomeMethod1();
    abstract public function SomeMethod2($name, $color);
    abstract public function SomeMethod3(): string;
}

// ---------------------------
abstract class Car
{
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function intro() : string;
}

class Audi extends Car {
    public function intro() : string {
        return "Proud to be Swedish! I'm a {$this->name}";
    }
}


// Create objects from the child classes
$audi = new Audi("Audi");
echo $audi->intro();
echo "<br>";