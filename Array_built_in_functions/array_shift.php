<?php
    /*
        array_shift function returns the first value in an array and then deletes it from the array. 

        - Parameter
        ---- $arr: The array to extract the first element from [Required]

        * This function will reset the array pointer
        * And also reset all the number "or string with a number value keys" to start from zero
    */

    function my_array_shift(array &$arr) :mixed {
        $res = null;
        $res_array = [];
        $take = false;

        foreach($arr as $key => $val):
            if(!$take):
                $res = $val;
                $take = true;
                continue;
            endif;

            if(gettype($key) === "integer" || gettype($key) === "double" || (gettype($key) === "string" &&
            ord($key) >= 48 && ord($key) < 58))
                $res_array[] = $val;
            else $res_array[$key] = $val;
        endforeach;

        $arr = $res_array;
        return $res;
    }

    // $arr = ["A", "B", "C", "D", "E", "F", "G"];    
    // $first = array_shift($arr);
    // var_dump($first);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    

    // $arr = ["A", "B", "C", "D", "E", "F", "G"];    
    // $first = my_array_shift($arr);
    // var_dump($first);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    

    // $arr = [];    
    // $first = array_shift($arr);
    // var_dump($first);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    

    // $arr = [];    
    // $first = my_array_shift($arr);
    // var_dump($first);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";

    // $arr = ["A"];    
    // $first = array_shift($arr);
    // var_dump($first);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    

    // $arr = ["A"];    
    // $first = my_array_shift($arr);
    // var_dump($first);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";

    // $arr = ["A" => 1, "B" => 2, "C", "D" => 4, "E" => 5, "F" => 6, "G"];    
    // $first = array_shift($arr);
    // var_dump($first);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    

    // $arr = ["A" => 1, "B" => 2, "C", "D" => 4, "E" => 5, "F" => 6, "G"];    
    // $first = my_array_shift($arr);
    // var_dump($first);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";

    // $arr = ["A" => 1, "15" => "B", "C", "D" => 4, "E" => 5, "F" => 6, "G"];    
    // $first = array_shift($arr);
    // var_dump($first);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    

    // $arr = ["A" => 1, "15" => "B", "C", "D" => 4, "E" => 5, "F" => 6, "G"];    
    // $first = my_array_shift($arr);
    // var_dump($first);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";