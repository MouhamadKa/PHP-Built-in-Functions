<?php
    /*
        Count the elements of an array

        - Parameters
        ---- $arr: The array to count the number of its elements [Required]
        ---- $mode: If true $count also the nested array elements. If false count only the main array element [Optional],
         Default = false
    */

    function my_count(array $arr, bool $mode=false) :int {
        $count = 0;

        foreach($arr as $key=>$val):
            $count++;

            if($mode && gettype($val)==="array") $count+= my_count($val,1);
        endforeach;

        return $count;
    }   

    // $arr = [
    //     1,
    //     2,
    //     3,
    //     [5,6,7, [9,10,11]]
    // ];
    // echo count($arr,1) . "<br>";

    // $arr = [
    //     1,
    //     2,
    //     3,
    //     [5,6,7, [9,10,11]]
    // ];
    // echo my_count($arr,1) . "<br>";

    // $arr = [];
    // echo count($arr,1) . "<br>";

    // $arr = [];
    // echo my_count($arr,1) . "<br>";

    // $arr = [
    //     1,
    //     2,
    //     3,
    //     [5,6,7, [9,10,11]]
    // ];
    // echo count($arr) . "<br>";

    // $arr = [
    //     1,
    //     2,
    //     3,
    //     [5,6,7, [9,10,11]]
    // ];
    // echo my_count($arr) . "<br>";
