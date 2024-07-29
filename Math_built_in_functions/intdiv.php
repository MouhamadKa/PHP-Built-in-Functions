<?php
    /*
        This function return the only real part of the division result

        - Parameters
        ---- $numerator [Required] 
        ---- $denominator [Required]
    */

    function my_intdiv(int $numerator, int $denominator) :int {
        return (int) ($numerator / $denominator);
    }

    // var_dump(10 / 2);
    // echo "<br>";
    // var_dump(intdiv(10 ,2));
    // echo "<br>";
    // var_dump(my_intdiv(10 ,2));
    // echo "<br>";
    
    // var_dump(11 / 2);
    // echo "<br>";
    // var_dump(intdiv(11 ,2));
    // echo "<br>";
    // var_dump(my_intdiv(11 ,2));
    // echo "<br>";
    
    // var_dump(10 / 26);
    // echo "<br>";
    // var_dump(intdiv(11 ,26));
    // echo "<br>";
    // var_dump(my_intdiv(11 ,26));
    // echo "<br>";

