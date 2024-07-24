<?php
    /*
        This function take to arrays of same length and combine them in one array. It uses the values of the first array as keys
        in the result array, and the values of the second array as values in the result array.

        * The two arrays must be of the same length

        - Parameters
        ---- $arr1: Array of keys [Required]
        ---- $arr1: Array of values [Required]
    */

    function my_array_combine(array $arr_of_keys, array $arr_of_values) : array{
        if (!is_array($arr_of_keys) || !is_array($arr_of_values)) {
            throw new InvalidArgumentException('Both parameters should be arrays.');
        }
    
        if (count($arr_of_keys) !== count($arr_of_values)) {
            throw new LengthException('The number of elements in both arrays must be equal.');
        }

        $res = [];
        for($i = 0 ; $i < sizeof($arr_of_keys) ; $i++):
            // echo $arr_of_keys[$i] . " " . $arr_of_values[$i] . "<br>";
            $res[$arr_of_keys[$i]] = $arr_of_values[$i];
        endfor;

        return $res;
    }

    
    // $letters = ["A", "B", "C"];
    // $names = ["Ahmad", "Basem", "Carol"];
    // echo "<pre>";
    // print_r(my_array_combine($letters, $names));
    // echo "<pre>";
    // echo "<br>############################<br>";
    
    // $letters = [];
    // $names = [];
    // echo "<pre>";
    // print_r(my_array_combine($letters, $names));
    // echo "<pre>";
    // echo "<br>############################<br>";
    
    // $letters = ["A", "B"];
    // $names = ["Ahmad", "Basem", "Carol"];
    // echo "<pre>";
    // print_r(my_array_combine($letters, $names));
    // echo "<pre>";
    // echo "<br>############################<br>";