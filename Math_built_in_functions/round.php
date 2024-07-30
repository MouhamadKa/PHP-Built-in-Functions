<?php
    /*
        Returns the rounded value of num to specified precision (number of digits after the decimal point). precision can also 
        be negative or zero (default).

        - Parameters
        ---- $num: The value to round [Required]
        ---- $precision: The optional number of decimal digits to round to [Optional], Default = 0
             If the precision is positive, num is rounded to precision significant digits after the decimal point.
             If the precision is negative, num is rounded to precision significant digits before the decimal point,
             i.e. to the nearest multiple of pow(10, -$precision), e.g. for a precision of -1 num is rounded to tens, 
             for a precision of -2 to hundreds, etc.

        ---- $mode: [Optional], Default = PHP_ROUND_HALF_UP
             PHP_ROUND_HALF_UP: Rounds num away from zero when it is half way there, making 1.5 into 2 and -1.5 into -2.
             PHP_ROUND_HALF_DOWN: Rounds num towards zero when it is half way there, making 1.5 into 1 and -1.5 into -1.
             PHP_ROUND_HALF_EVEN: Rounds num towards the nearest even value when it is half way there, making both 1.5 and 2.5 
             into 2.
             PHP_ROUND_HALF_ODD: Rounds num towards the nearest odd value when it is half way there, making 1.5 into 1 and 2.5 
             into 3.
    */

    function my_round(float $num, int $precision = 0, int $mode = PHP_ROUND_HALF_UP) :float{
        $real_part = (int) $num;
        $float_part = fmod($num, 1);
        
        if($precision < 0):
            $precision = 10 ** -$precision; 
            $num = (int) $num;
            $positive = ($num >= 0) ? true : false;
            $num = abs($num);

            if($num % $precision >= $precision / 2)
                $num +=  $precision - $num % $precision;
            else $num = $num - $num % $precision;

            return ($positive) ? $num : -$num;
        endif;

        if($precision + 2 >= strlen($float_part)) return $num;
        $judge = ((string)$float_part) [$precision + 2];
        $float_part = (int) substr((string)$float_part, 2, $precision);

        $judge = ($judge === '5') ? "HALF" :
                 ( ($judge) < '5' ? "Less than half" : "Larger than half" );

        if($judge == "Larger than half"):
            $float_part++;
        elseif($judge == "smaller than half"):
            $float_part;
        elseif($judge == "HALF"):
            if($mode == PHP_ROUND_HALF_UP)
                $float_part++;
            elseif($mode == PHP_ROUND_HALF_EVEN && $judge == "HALF")
                $float_part = ($float_part % 2 == 0) ? $float_part : $float_part + 1;
            elseif( $mode == PHP_ROUND_HALF_ODD && $judge == "HALF" )
                    $float_part = ($float_part % 2 == 1) ? $float_part : $float_part + 1;
        endif;

        return $real_part + $float_part / 10 ** $precision;
    }


    // echo round(0.5155, 2) . "<br>";
    // echo my_round(0.5155, 2) . "<br>";

    // echo round(0.49) . "<br>";
    // echo my_round(0.49) . "<br>";

    // echo round(0.49, 1, PHP_ROUND_HALF_DOWN) . "<br>";
    // echo my_round(0.49, 1, PHP_ROUND_HALF_DOWN) . "<br>";

    // echo round(0.45, 1, PHP_ROUND_HALF_DOWN) . "<br>";
    // echo my_round(0.45, 1, PHP_ROUND_HALF_DOWN) . "<br>";

    // echo round(0.49, 1, PHP_ROUND_HALF_EVEN) . "<br>";
    // echo my_round(0.49, 1, PHP_ROUND_HALF_EVEN) . "<br>";

    // echo round(0.45, 1, PHP_ROUND_HALF_EVEN) . "<br>";
    // echo my_round(0.45, 1, PHP_ROUND_HALF_EVEN) . "<br>";

    // echo round(0.49, 0, PHP_ROUND_HALF_EVEN) . "<br>";
    // echo my_round(0.49, 0, PHP_ROUND_HALF_EVEN) . "<br>";

    // echo round(0.49, 1, PHP_ROUND_HALF_ODD) . "<br>";
    // echo my_round(0.49, 1, PHP_ROUND_HALF_ODD) . "<br>";

    // echo round(0.49, 2, PHP_ROUND_HALF_ODD) . "<br>";
    // echo my_round(0.49, 2, PHP_ROUND_HALF_ODD) . "<br>";

    // echo round(0.49, 5, PHP_ROUND_HALF_ODD) . "<br>";
    // echo my_round(0.49, 5, PHP_ROUND_HALF_ODD) . "<br>";


    // echo round(504.33, -1) . "<br>";
    // echo my_round(504.33, -1) . "<br>";

    // var_dump(round(3.4)); echo "<br>";
    // var_dump(my_round(3.4)); echo "<br>";

    // var_dump(round(3.5)); echo "<br>";
    // var_dump(my_round(3.5)); echo "<br>";
    
    // var_dump(round(3.6)); echo "<br>";
    // var_dump(my_round(3.6)); echo "<br>";
    
    // var_dump(round(3.6, 0)); echo "<br>";
    // var_dump(my_round(3.6, 0)); echo "<br>";
    
    // var_dump(round(5.045, 2)); echo "<br>";
    // var_dump(my_round(5.045, 2)); echo "<br>";
    
    // var_dump(round(5.055, 2)); echo "<br>";
    // var_dump(my_round(5.055, 2)); echo "<br>";
    
    // var_dump(round(345, -2)); echo "<br>";
    // var_dump(my_round(345, -2)); echo "<br>";
    
    // var_dump(round(345, -3)); echo "<br>";
    // var_dump(my_round(345, -3)); echo "<br>";
    
    // var_dump(round(678, -2)); echo "<br>";
    // var_dump(my_round(678, -2)); echo "<br>";
    
    // var_dump(round(678, -3)); echo "<br>";
    // var_dump(my_round(678, -3)); echo "<br>";
    
    // var_dump(round(-678, -2)); echo "<br>";
    // var_dump(my_round(-678, -2)); echo "<br>";
    
    // var_dump(round(-678, -3)); echo "<br>";
    // var_dump(my_round(-678, -3)); echo "<br>";
    
    // var_dump(round(-648, -1)); echo "<br>";
    // var_dump(my_round(-648, -1)); echo "<br>";