<?php

use BcMath\Number;
include 'app.php';

    function sum($n1, $n2) {
        $result = $n1 + $n2;
        $sql = "INSERT INTO hist VALUES (:n1, :n2)";
    }

    function sub($n1, $n2) {
        return $n1 - $n2;
    }

    function mult($n1, $n2) {
        return $n1 * $n2;
    }

    function div($n1, $n2) {
        return $n1 / $n2;
    }

    function rest($n1, $n2) {
        return $n1 % $n2;
    }

    function prct($n1, $pcrt) {
        return ($n1 * $pcrt) / 100;
    }

    function clear($n1, $n2) {
        
    }

    function ro($result) {
        if ($result) 
            ceil($result); // round cima
        else
            floor($result); // round cima
    }
?>