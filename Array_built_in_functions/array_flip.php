<?php
    /*
        This function turns the array keys to values, and the array values to keys.

        - Parameters
        ---- $arr: The array to flip its keys and values [Required]
    */

    function my_array_flip(array $arr) :array {
        $res = [];
        foreach($arr as $key=> $val):
            $res[$val] = $key;
        endforeach;

        return $res;
    }

    // $arr = ["EG" => "Egypt", "SY" => "Syria", "KSA" => "Saudi Arabia"];
    // echo "<pre>";
    // print_r(array_flip($arr));
    // echo "<pre>";
    

    // $arr = ["EG" => "Egypt", "SY" => "Syria", "KSA" => "Saudi Arabia"];
    // echo "<pre>";
    // print_r(my_array_flip($arr));
    // echo "<pre>";
    
    // $arr = [];
    // echo "<pre>";
    // print_r(array_flip($arr));
    // echo "<pre>";
    

    // $arr = [];
    // echo "<pre>";
    // print_r(my_array_flip($arr));
    // echo "<pre>";