<?php
    class Fruit {
        // Property
        public $name;
        public $color;

        // Method
        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }
    }

    // Definition Object
    $apple = new Fruit();
    $durian = new Fruit();

    // Use method in class Fruit

    // Set name value object
    $apple->set_name('Apple <br>');
    $durian->set_name('Durian');

    // Get value name object
    echo $apple->get_name(); 
    echo $durian->get_name();
?>