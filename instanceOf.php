<?php 
    class Flower {
        public $mawar;
        public $melati;

        function set_name($name) {
            $this->mawar = $name;
        }

        function get_name(){
            return $this->mawar;
        }
    }

    $mawar = new Flower();
    $mawar->set_name("Mawar <br>");
    echo $mawar->get_name();
    var_dump($mawar instanceof Flower);
?>