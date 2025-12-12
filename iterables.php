<?php 
    function printIterable(iterable $myIterables) {
        foreach ($myIterables as $iterable) {
            echo $iterable;
        }
    }

    $arr = ["A", "B", "C", "D"];

    printIterable($arr);
?>