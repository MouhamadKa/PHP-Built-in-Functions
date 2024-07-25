<?php
    /*
    
    */

    function my_array_slice(array $arr, $start, $length = null, $preserve=false) :array {
        $start = ($start >= 0) ? $start : count($arr) - $start;
        if($length === null) $length = count($arr) - $start;
        $end = ($length > 0) ? $start + $length -1  : count($arr) + $length - $start;

        $res = [];
        $index = 0;
        foreach($arr as $key => $val):
            if($index >= $start && $index <= $end):
                if(gettype($key) === "integer" || gettype($key) === "double" || (gettype($key) === "string" &&
                 ord($key) >= 48 && ord($key) < 58))
                    $res[] = $val;

                else $res[$key] = $val;
            endif;

            $index++;
        endforeach;

        return $res;
    }

    // $arr = [1, 2, 3, 4, 5, 6, 7, 8];
    // echo "<pre>";
    // print_r(array_slice($arr, 1,2));
    // echo "</pre>";
    
    // echo "<pre>";
    // print_r(my_array_slice($arr, 1,2));
    // echo "</pre>";
    
    // echo "<pre>";
    // print_r(array_slice($arr, 1,-2));
    // echo "</pre>";
    
    // echo "<pre>";
    // print_r(my_array_slice($arr, 1,-2));
    // echo "</pre>";
    
    // $arr = [1 => "A" , 2 => "B", 3 => "C"];
    // echo "<pre>";
    // print_r(array_slice($arr, 1, 2, true));
    // echo "</pre>";
    
    
    // $arr = [1 => "A" , 2 => "B", 3 => "C", "A" => "A", "B" => "B", "C" => "C"];
    // echo "<pre>";
    // print_r(array_slice($arr, 1, 5));
    // echo "</pre>";

    
    // $arr = [1 => "A" , 2 => "B", 3 => "C"];
    // echo "<pre>";
    // print_r(array_slice($arr, 10, 2));
    // echo "</pre>";