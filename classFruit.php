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
?>