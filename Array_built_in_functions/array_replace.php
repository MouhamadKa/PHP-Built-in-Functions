<?php
    /*
        This function adds new key value pairs from the second argument, or just override the value if the key already exists.

        - Parameters
        ---- $arr1: The first array [Required]
        ---- $arrs: An array of arrays [Required]

        

        If a key exists previously, we don't add it again. We just override its value instead.
        If a key comes for the first time, we add it with its value.
        
        * This function may looks like the array_merge function. The main difference between them is that the array_merge reindex
        * the number keys where the array_replace keeps them as they are
    */
    
    function my_array_replace($arr1, array ...$arrs){
        foreach($arrs as $arr):
            foreach($arr as $key => $val):
                $arr1[$key] = $val;
            endforeach;
        endforeach;

        return $arr1;
    }

    // $arr1 = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
    // $arr2 = ["Four" => "HTML", "Five" => "Python"];
    // $arr3 = ["One" => "HTML", "Two" => "Python"];

    // echo "<pre>";
    // print_r(array_merge($arr1, $arr2, $arr3));
    // echo "</pre>";

    // echo "<pre>";
    // print_r(my_array_replace($arr1, $arr2, $arr3));
    // echo "</pre>";

    // echo "<pre>";
    // print_r(my_array_replace($arr1, []));
    // echo "</pre>";


    // $arr1 = [1.5 => "One", "Z" => "Two", 3 => "Three"];
    // $arr2 = ["x" => "Four", "5" => "Five", 6 => "Six"];
    // echo "<pre>";
    // print_r(array_merge($arr1, $arr2));
    // echo "</pre>";

    // echo "<pre>";
    // print_r(my_array_replace($arr1, $arr2));
    // echo "</pre>";



