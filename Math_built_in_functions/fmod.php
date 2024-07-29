<?php
    /*
        Returns the floating point remainder (modulo) of the division of the arguments
        
        - Parameters
        ---- $numerator [Required]
        ---- $denominator [Required]  
    */

    function my_fmod(float $numerator, float $denominator) :float {
        return $numerator - intdiv($numerator, $denominator) * $denominator;
    }

    // var_dump(fmod(10, 2)); echo "<br>";
    // var_dump(my_fmod(10, 2)); echo "<br>";

    // var_dump(fmod(10.5, 2)); echo "<br>";
    // var_dump(my_fmod(10.5, 2)); echo "<br>";

    // var_dump(fmod(10.5, 7)); echo "<br>";
    // var_dump(my_fmod(10.5, 7)); echo "<br>";

    // var_dump(fmod(105, 25)); echo "<br>";
    // var_dump(my_fmod(105, 25)); echo "<br>";

    // var_dump(fmod(105.76, 13)); echo "<br>";
    // var_dump(my_fmod(105.76, 13)); echo "<br>";