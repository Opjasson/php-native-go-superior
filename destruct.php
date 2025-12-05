<?php 
    class Bicycle {
        public $name;
        public $color;

        function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }

        function __destruct()
        {
            echo "The name bicycle is {$this->name}, its color is {$this->color}";
        }
    }

    $melano = new Bicycle("melano", "red");
?>