<?php
    /*
    
    */

    function my_pow(mixed $num, mixed $exponent) :mixed {
        if($exponent == 0) return 1;
        
        $positive = ($exponent > 0) ? true : false;
        $exponent = abs($exponent);
        $res = 1;
        while($exponent > 0):
            $res = ($positive) ? $res * $num : $res / $num;

            $exponent--;
        endwhile;

        return $res;
    }

    // echo pow(3, 3) . "<br>";
    // echo my_pow(3, 3) . "<br>";

    // echo pow(3, -3) . "<br>";
    // echo my_pow(3, -3) . "<br>";

    // echo pow(3, 0) . "<br>";
    // echo my_pow(3, 0) . "<br>";

    // echo pow(2, 5) . "<br>";
    // echo my_pow(2, 5) . "<br>";

    // echo pow(-2, 5) . "<br>";
    // echo my_pow(-2, 5) . "<br>";

    // echo pow(2, -5) . "<br>";
    // echo my_pow(2, -5) . "<br>";