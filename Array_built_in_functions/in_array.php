<?php
    /*
        Check if a value exists within an array

        - Parameters
        ---- $element: The value to search for [Required]
        ---- $search_array: The array to search in [Required]
        ---- $type: To determine if we want the type to be considered or only the value [Optional], Default = false
    */

    function my_in_array(mixed $element, array $arr, bool $type = false) :bool {
        $exist = false;

        foreach($arr as $key => $val):
            if(($element === $val) || ($element == $val && !$type)):
                $exist = true;
                break;
            endif;
        endforeach;

        return $exist;
    }


    // $arr = [1, 2, 3, 4, 5, 6];
    // var_dump(my_in_array("1", $arr));
    // echo "<br>";
    
    // $arr = [1, 2, 3, 4, 5, 6];
    // var_dump(my_in_array("1", $arr, true));
    // echo "<br>";
    
    // $arr = [1, 2, 3, 4, 5, 6];
    // var_dump(my_in_array(2, $arr, true));
    // echo "<br>";