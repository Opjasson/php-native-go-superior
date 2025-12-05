<?php 
    class Snack {
        public $name;
        protected $taste;
        private $color;
    }

    $snack = new Snack();

    $snack->name = "Beng-beng"; //Not Error
    $snack->taste;  // Error
    $snack->color; // Error

    echo $snack->name;
?>
