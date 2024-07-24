<?php
    /*
        This function count how many times each value exists in an array and return another array wich its keys are the values
        in the source array, and it's values are the count of each element

        - Parameters
        ---- $arr: To count the repetition of its values [Required]
    
    */

    function my_array_count_values(array $arr) :array {
        $res = [];
        foreach($arr as $val):
            if(empty($res[$val]))
                $res[$val] = 1;

            else $res[$val]++; 

        endforeach;

        return $res;
    }

    // $arr = ["A", "B", "C", "D"];
    // echo '<pre>';
    // print_r(my_array_count_values($arr));
    // echo '<pre>';

    // $arr = ["A", "A", "A", "B", "C", "D"];
    // echo '<pre>';
    // print_r(my_array_count_values($arr));
    // echo '<pre>';

    // $arr = [];
    // echo '<pre>';
    // print_r(my_array_count_values($arr));
    // echo '<pre>';
    