<?php 
    interface Animal {
        public function makeSound();
    }

    class Cat implements Animal {
        public function makeSound() {
            echo "Meoww<br>";
        }
    }

    class Dog implements Animal {
        public function makeSound() {
            echo "Bark<br>";
        }
    }

    class Sheep implements Animal {
        public function makeSound() {
            echo "Mbee<br>";
        }
    }

    $cat = new Cat();
    $dog = new Dog();
    $sheep = new Sheep();

    $animals = array($cat, $dog, $sheep);

    foreach ($animals as $animal) {
        $animal->makeSound();
    }
?>