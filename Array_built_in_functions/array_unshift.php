<?php
    /*
        This function add a value or many values at the beganing of an array

        - Parameters
        ---- $arr: To add the values to [Required]
        ---- ...$vals: To add to the array [Optional], Default =[]
        
        * This function won't affect the array pointer
    */

    function my_array_unshift(array &$arr, mixed ...$vals) :int {
        $res = ($vals != []) ? $vals[0] : [];
        if ($res != []):
            foreach($vals as $val)
                $res[] = $val;
            $arr = $res;
        endif;

        return count($arr);
    }

    // $arr = ["A", "B", "C", "D", "E", "F", "G"];    
    // echo next($arr) . "<br>";
    // $first = array_unshift($arr, 0); 
    // echo next($arr) . "<br>";
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    

    // $arr = ["A", "B", "C", "D", "E", "F", "G"];    
    // echo next($arr) . "<br>";
    // $first = array_unshift($arr, 0); 
    // echo next($arr) . "<br>";
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    

    // $arr = ["A", "B", "C", "D", "E", "F", "G"];    
    // echo next($arr) . "<br>";
    // $first = array_unshift($arr); 
    // echo next($arr) . "<br>";
    // var_dump($first);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";