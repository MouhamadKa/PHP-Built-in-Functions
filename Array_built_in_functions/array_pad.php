<?php
    /*
        This function pads an array to a given size

        - Parameters
        ---- $arr: The array to pad [Required]
        ---- $size: The size to pad the array to
            If it is a positive number, it adds the values after the original elements.
            If it is a negative number, it adds the values before the original elements.
            If it is smaller than the size of array, It does nothing.

        ---- $value: The value to pad the array with
    */

    function my_array_pad(array $arr, int $size, mixed $val) : array{
        $res = [];

        $absolute_size = abs($size);
        for($i = 0; $i < $absolute_size - sizeof($arr) ; $i++)
            array_push($res, $val);        
        // print_r($res);
        if($size > sizeof($arr)) $arr = array_merge($arr, $res);
        elseif($size < sizeof($arr)) $arr = array_merge($res, $arr);
        
        return $arr;
    }

    // $arr = ["A", "B", "C", "D"];
    // echo "<pre>";
    // print_r(my_array_pad($arr, 10, 1));
    // echo "</pre>";

    // $arr = ["A", "B", "C", "D"];
    // echo "<pre>";
    // print_r(my_array_pad($arr, -10, 1));
    // echo "</pre>";

    // $arr = ["A", "B", "C", "D"];
    // echo "<pre>";
    // print_r(my_array_pad($arr, 2, 1));
    // echo "</pre>";
    
    // $arr = [];
    // echo "<pre>";
    // print_r(my_array_pad($arr, -10, 1));
    // echo "</pre>";