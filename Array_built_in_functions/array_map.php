<?php
    /*
        The array_map() function sends each value of an array to a user-made function, and returns an array with new values, given by the user-made function.

        - Parameters
        ---- $func: The callback function to apply on the values in the arrays [Required]
        ---- $arrs: The arrays to use thier values as inputs to the function [Required]

        *Tip: You can assign one array to the function, or as many as you like.
    */
    
    function my_array_map(callable $func, array ...$arrs) :array{
        $res = [];
        $len = count($arrs[0]);

        for($i = 0; $i < $len ; $i++):
            
            $arg = [];
            foreach($arrs as $arr):
                $arg[] = $arr[$i];
            endforeach;

            $res[] = $func(...$arg);
        endfor;

        return $res;
    }


    // echo "<pre>";
    // print_r(my_array_map("max", [1] , [2]));
    // echo "</pre>";
    
    // echo "<pre>";
    // print_r(my_array_map("max", [1, 2, 3, 15] , [2, 3, 3, 3]));
    // echo "</pre>";

    // $fname = ["Mouhamad", "Samy", "Mahmoud"];
    // $lname = ["Baha", "Sameer", "Lion"];
    
    // echo "<pre>";
    // print_r(my_array_map(fn($f ,$l) => "Hello $f $l!", $fname, $lname));
    // echo "</pre>";

    // function myfunction($v){
    //     return($v*$v);
    // }

    // $a=array(1,2,3,4,5);
    // print_r(my_array_map("myfunction",$a));