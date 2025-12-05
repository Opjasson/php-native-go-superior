<?php

class Vegetable
{
    public $brokoli;

    function __construct($name)
    {
        $this->brokoli = $name;
    }

    function get_name() {
        return $this->brokoli;
    }
}

$brokoli = new Vegetable("Brokoli");

echo $brokoli->get_name();
