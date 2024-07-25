<?php
    /*
        This function pops out the last element of an array and returns its value

        - Parameters
        ---- $arr: The array to pop out its last element [Required]

        * This function will reset the array pointer
    */

    function my_array_pop(array &$arr) :mixed {
        $res = null;
        $array_after_pop = [];

        $last = count($arr) - 1;
        $count = 0;
        foreach($arr as $key => $val):
            if($count == $last):
                $res = $val;
                continue;
            endif;

            $array_after_pop[$key] = $val;
            $count++;
        endforeach;

        $arr = $array_after_pop;
        return $res;
    }

    $arr = ["A", "B", "C", "D", "E", "F", "G"];    
    $last = array_pop($arr);
    var_dump($last);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    $arr = ["A", "B", "C", "D", "E", "F", "G"];    
    $last = my_array_pop($arr);
    var_dump($last);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>#####################################<br>";


    $arr = [1 => 1, 12 => 2, "C", "D" => 4, "E" => 5, "F" => 6, "G"];    
    $last = array_pop($arr);
    var_dump($last);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    $arr = [1 => 1, 12 => 2, "C", "D" => 4, "E" => 5, "F" => 6, "G"];  
    $last = my_array_pop($arr);
    var_dump($last);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>#####################################<br>";


    $arr = [];    
    $last = array_pop($arr);
    var_dump($last);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    $arr = [];  
    $last = my_array_pop($arr);
    var_dump($last);
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    echo "<br>#####################################<br>";