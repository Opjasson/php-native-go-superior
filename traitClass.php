<?php 

    trait Message {
        public function msg1() {
            echo "PHP is fun!";
        }
    }

    class Eko {
        use Message;
    }

    $eko = new Eko();

    $eko->msg1();
?>