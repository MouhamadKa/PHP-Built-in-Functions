<?php
    /*
        This function returns the result of summing all values of an array

        - Parameters
        ---- $arr: To sum its values [Required]
    */

    function my_array_sum(array $arr) :float {
        $res = 0;

        foreach($arr as $key => $val)
            if(gettype($val) === "integer" || gettype($val) === "double" ||(gettype($val) === "string" && ord($val) > 48 && ord($val) < 58))
                $res += $val;
        return $res;
    }

    $arr = [1, 2, 5, 10, 6, [4,2], 3.5, "2"];
    echo my_array_sum($arr) . "<br>";

    $arr = [1, 2, 5, 10, 6, [4,2], 3.5, "2"];
    echo my_array_sum($arr) . "<br>";

    $arr = [1, 2, 5, 10, 6, [4,2], 3.5, "s"];
    echo my_array_sum($arr) . "<br>";
