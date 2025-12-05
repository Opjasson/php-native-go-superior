<?php

class Vegetable
{
    public $brokoli;

    function __construct($name)
    {
        $this->brokoli = $name;
    }

    function get_name()
    {
        return $this->brokoli;
    }
}

$brokoli = new Vegetable("Brokoli<br>");

echo $brokoli->get_name();

class VegetableMultiple
{
    public $name;
    public $color;

    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_color() {
        return $this->color;
    }
}

$tomato = new VegetableMultiple("name : tomato<br>", "color : red");

echo "------Constructor Multiple------ <br>";
echo $tomato->get_name();
echo $tomato->get_color();

