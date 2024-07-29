<?php
    /*
        Round fractions down

        - Parameters:
        - $num: The number to round down [Requored]
    */

    function my_floor(float $num) :float {
        return ($num >= 0) ? (int) $num : (int) $num - 1 ;
    }

    // echo my_floor(5) . "<br>";
    // echo my_floor(5.0) . "<br>";
    // echo my_floor(5.00001) . "<br>";
    // echo my_floor(5.10) . "<br>";
    // echo my_floor(5.9) . "<br>";
    // echo my_floor(-5.9) . "<br>";