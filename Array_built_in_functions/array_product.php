<?php
    /*
        This function returns the result of multiplying all values of an array

        - Parameters
        ---- $arr: To multiply its values [Required]
    */

    function my_array_product(array $arr) :float {
        $res = 1;

        foreach($arr as $key => $val)
            if(gettype($val) === "integer" || gettype($val) === "double" ||(gettype($val) === "string" && ord($val) > 48 && ord($val) < 58))
                $res *= $val;
        return $res;
    }

    // $arr = [1, 2, 5, 10, 6, [4,2], 3.5, "2"];
    // echo array_product($arr) . "<br>";

    // $arr = [1, 2, 5, 10, 6, [4,2], 3.5, "2"];
    // echo my_array_product($arr) . "<br>";

    // $arr = [1, 2, 5, 10, 6, [4,2], 3.5, "s"];
    // echo my_array_product($arr) . "<br>";
