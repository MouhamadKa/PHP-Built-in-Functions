<?php
    /*
        This function returns the values of an array

        - Parameters
        ---- $arr: The array to return its values [Required]
    */

    function my_array_values(array $arr) :array {
        $res = [];
        foreach($arr as $key => $val)
            array_push($res, $val);

        return $res;
    }

    // $arr = ["Osama", "Ahmed", "Samed", "Mahmoud", "Gamal", "Osama", 1, "1"];
    // echo "<pre>";
    // print_r(my_array_values($arr));
    // echo "<pre>";

    // $countries = ["EG" => "Egypt", "SY" => "Syria", "KSA" => "Saudi Arabia", "Q" => "Qatar"];
    // echo "<pre>";
    // print_r(my_array_values($countries));
    // echo "<pre>";

    // $arr = [];
    // echo "<pre>";
    // print_r(my_array_values($arr));
    // echo "<pre>";
