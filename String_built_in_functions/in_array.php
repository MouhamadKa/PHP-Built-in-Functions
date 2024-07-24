<?php
    /*
        A function to test if a value is in an array

        - Parameters
        ---- $search : the value to search for [Required]
        ---- $arr : the array to search in [Required]
    */

    function is_in_array($search, $arr){
        for($i = 0 ; $i < sizeof($arr) ; $i++)
            if($arr[$i] == $search) return true;


        return false;
    }



    // var_dump(is_in_array("x", ["a", "b", "c"]));
    // echo "<br>";
    // var_dump(is_in_array("x", ["a", "b", "c", "x", "y", "z"]));
    // echo "<br>";
    // var_dump(is_in_array("x", ["a", "b", "c", "Z"]));
    // echo "<br>";
    // var_dump(is_in_array("1", [1, 2, 3]));
    // echo "<br>";