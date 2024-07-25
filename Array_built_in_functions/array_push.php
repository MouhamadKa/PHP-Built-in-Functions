<?php
    /*
        This function will add an element or more to the end of a given array and returns its value

        - Parameters
        ---- $arr: The array to add elements to [Required]
        ---- ...$vals: Valuews to be added to the array [Required]
        
        * This function won't affect the array pointer
    */

    function my_array_push(array $arr,mixed ...$vals) :int {
        foreach($vals as $val):
            $arr[] = $val;
        endforeach;

        return count($arr);
    }

    // $arr = ["A", "B", "C", "D", "E", "F", "G"];  
    // var_dump(array_push($arr, "H"));

    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>#############################################<br>";

    // $arr = ["A", "B", "C", "D", "E", "F", "G"];  
    // var_dump(array_push($arr, "H"));

    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>#############################################<br>";

    // $arr = ["A", "B", "C", "D", "E", "F", "G"];  
    // var_dump(array_push($arr, "H", "I", "J"));

    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>#############################################<br>";

    // $arr = ["A", "B", "C", "D", "E", "F", "G"];  
    // var_dump(array_push($arr, "H", "I", "J"));

    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>#############################################<br>";
