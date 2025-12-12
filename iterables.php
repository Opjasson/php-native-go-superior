<?php 
    function printIterable(iterable $myIterables) {
        foreach ($myIterables as $iterable) {
            echo $iterable;
        }
    }

    $arr = ["A", "B", "C", "D"];

    printIterable($arr);

    function getIterable():iterable {
        return ["A", "B", "C", "D"];
    }

    $myIterable = getIterable();
    foreach ($myIterable as $iterable) {
        echo $iterable;
    }
?>