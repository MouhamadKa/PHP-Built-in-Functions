<?php
    /*
        A function to append a value to the end of an array

        - Parameters 
        ---- $arr: The array to add the value to [Required]
        ---- $value: The value to be added to the array [Required]

    */

    function append($arr, $val){
        $arr [sizeof($arr)] = $val;

        return $arr;
    }


    // echo '<pre>';
    // print_r(append([1,2,3], 4));
    // echo '</pre>';

    // echo '<pre>';
    // print_r(append([], 4));
    // echo '</pre>';