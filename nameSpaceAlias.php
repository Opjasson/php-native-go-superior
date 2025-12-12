<?php 
    namespace Html;

    class Test {
        public function sayHay() {
            echo "Say hallo everyone";
        }
    }

    use Html as H;

    $tester = new H\Test();

    $tester->sayHay();
?>