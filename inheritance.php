<?php 
    class Hero {
        public $name;
        public $skill;

        public function __construct($name, $skill) {
            $this->name = $name;
            $this->skill = $skill;
        }

        public function chose_hero() {
            return "Name Hero : {$this->name}<br> Skill : {$this->skill}<br>";
        }
    }

    class Mirana extends Hero {
        public function voice() {
            return "The moon lights my way!";
        }
    }

    $mirana = new Mirana("Mirana", "Sacred arrow");

    echo $mirana->chose_hero();
    echo $mirana->voice();

    
?>