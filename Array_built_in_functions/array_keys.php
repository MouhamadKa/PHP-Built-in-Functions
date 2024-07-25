<?php
    /*
        This function returs the keys of an array

        - Parameters
        ---- $arr: The array to grap its keys
        ---- $value: Optional value. If true, grap only the keys with this assossiated value. If false, grap all the keys.
        It's false by defau;t
        ---- $type: in case we specified a value, wethere we want to also check the type or not. By default it's false.
    */

    function my_array_keys(array $arr, mixed $word = null, bool $type = false) : array{
        $res = [];

        foreach($arr as $key => $val):
            if(!isset($word))   array_push($res, $key);

            else
                if(($type && $word === $val) || (!$type && $word == $val)) 
                    array_push($res, $key);
        endforeach;

        return $res;
    }

    // $arr = ["Osama", "Ahmed", "Samed", "Mahmoud", "Gamal", "Osama", 1, "1"];
    // echo "<pre>";
    // print_r(array_keys($arr));
    // echo "<pre>";

    // $arr = ["Osama", "Ahmed", "Samed", "Mahmoud", "Gamal", "Osama", 1, "1"];
    // echo "<pre>";
    // print_r(my_array_keys($arr));
    // echo "<pre>";

    // $arr = ["Osama", "Ahmed", "Samed", "Mahmoud", "Gamal", "Osama", 1, "1"];
    // echo "<pre>";
    // print_r(my_array_keys($arr, 1));
    // echo "<pre>";

    // $arr = ["Osama", "Ahmed", "Samed", "Mahmoud", "Gamal", "Osama", 1, "1"];
    // echo "<pre>";
    // print_r(my_array_keys($arr , 1 , true));
    // echo "<pre>";

    // $arr = [];
    // echo "<pre>";
    // print_r(my_array_keys($arr , 1 , true));
    // echo "<pre>";

    // $arr = ["O" => "Osama", "A" => "Ahmed", "S" => "Samed", "M" => "Mahmoud", "G" => "Gamal", "O" => "Osama", 1 => 1, "1" => "1"];
    // echo "<pre>";
    // print_r(my_array_keys($arr));
    // echo "<pre>";



    