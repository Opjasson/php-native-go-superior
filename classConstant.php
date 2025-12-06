<?php
    class ConstantFruit {
        const LEAVING_MESSAGE = "Thanks for visitting W3School<br>";
    }

    echo ConstantFruit::LEAVING_MESSAGE;

    class SelfConstant {
        const MESSAGE = "Say hello everyone";

        function msg() {
           echo self::MESSAGE;
        }
    }

    $testSelf = new SelfConstant();

    echo $testSelf->msg();
?>