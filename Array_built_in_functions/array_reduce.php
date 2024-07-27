<?php
    /*
    
    */

    function my_array_reduce(array $arr, callable $func, $initial = 0){
        if(count($arr) != 1):
            $reduce = array_splice($arr,count($arr)-1,1);
            return $func($reduce[0],my_array_reduce($arr, $func,$initial));

        else: return $func($arr[0], $initial);
        endif;
    }

    // $nums = [1, 2, 3, 4, 5];
    // function add($num1, $num2){
    //     return $num1 + $num2;
    // }

    // echo array_reduce($nums, "add") . "<br>";
    // echo my_array_reduce($nums, "add") . "<br>";


    // function multiply($num1, $num2){
    //     return $num1 * $num2;
    // }
    // echo array_reduce($nums, "multiply",1) . "<br>";
    // echo my_array_reduce($nums, "multiply" , 1) . "<br>";