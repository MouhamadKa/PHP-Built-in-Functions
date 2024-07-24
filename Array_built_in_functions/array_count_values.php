<?php
    /*
    
    
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
    