<?php
    /*
        This function merge arrays togeter. We can merge as many arrays as we want..

        - Parameters
        ---- $arr1: The first array to merge [Required]
        ---- ...$arrs: array of arrays that we want to merge with the first one [Required]

        If a key exists previously, we don't add it again. We just override its value instead.
        If a key comes for the first time, we add it with its value.
        If a key is a number, we reindex all number keys starting from zero.
    */

    function my_array_merge(array $arr1, array ...$arrs) :array {
        $res = [];
        $count = 0;

        foreach($arr1 as $key => $val):
            if(gettype($key) === "integer" || gettype($key) === "double" || 
            (gettype($key) === "string" && ord($key) >= 48 && ord($key) < 58)){
                $res[$count] = $val;
                $count++;
            }

            else $res[$key] = $val;
        endforeach;


        foreach($arrs as $arr):
            foreach($arr as $key => $val):
                if(gettype($key) === "integer" || gettype($key) === "double" || 
                (gettype($key) === "string" && ord($key) >= 48 && ord($key) < 58)){
                    $res[$count] = $val;
                    $count++;
                }

                else $res[$key] = $val;
            endforeach;
        endforeach;

        return $res;
    }



    // $arr1 = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
    // $arr2 = ["Four" => "HTML", "Five" => "Python"];
    // $arr3 = ["One" => "HTML", "Two" => "Python"];

    // echo "<pre>";
    // print_r(array_merge($arr1, $arr2, $arr3));
    // echo "</pre>";

    // echo "<pre>";
    // print_r(my_array_merge($arr1, $arr2, $arr3));
    // echo "</pre>";

    // echo "<pre>";
    // print_r(my_array_merge($arr1, []));
    // echo "</pre>";


    // $arr1 = [1.5 => "One", "Z" => "Two", 3 => "Three"];
    // $arr2 = ["x" => "Four", "5" => "Five", 6 => "Six"];
    // echo "<pre>";
    // print_r(array_merge($arr1, $arr2));
    // echo "</pre>";

    // echo "<pre>";
    // print_r(my_array_merge($arr1, $arr2));
    // echo "</pre>";



