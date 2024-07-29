<?php
    /*
        Return the absolute value of a giving number

        - Parameters
        ---- $num: The number I want to get its absolute value [Required]
    */

    function my_abs(float | int $num) :float {
        return ($num > 0) ? $num : - $num;
    }

    // echo abs(1) . "<br>";
    // echo my_abs(1) . "<br>";

    // echo abs(-1) . "<br>";
    // echo my_abs(-1) . "<br>";

    // echo abs(-1.32) . "<br>";
    // echo my_abs(-1.32) . "<br>";

    // echo abs(0) . "<br>";
    // echo my_abs(0) . "<br>";