<?php
    final class Fruit {
        public $name;

        public function jenis() {
          return "Buah {$this->name} adalah jenis buah buahan";  
        }
    }

    // error code because extend from final class
    class Inherit extends Fruit {
      
    }
?>