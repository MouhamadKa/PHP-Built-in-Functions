<?php
    /*
        This function rounds fractions up

        - Parameters:
        - $num: The number to round up [Requored]
    */

    function my_ceil(float $num) :float {
        if($num <= 0) return (int) $num; 
        return ((int) $num != $num) ? (int) $num + 1 : (int) $num ;
    }

    // echo my_ceil(5) . "<br>";
    // echo my_ceil(5.0) . "<br>";
    // echo my_ceil(5.00001) . "<br>";
    // echo my_ceil(5.10) . "<br>";
    // echo my_ceil(5.9) . "<br>";
    // echo my_ceil(-5.9) . "<br>";