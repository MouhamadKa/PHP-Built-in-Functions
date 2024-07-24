<?php
    /*
        Function to split a string into fixed-length chunks and put these chunks in an array

        - Parameters 
        ---- $str: The string to be chunked [Required]
        ---- $length: Length of the chunk [Optional], Default = 1
    */

    function string_split($str, $length=1){
        $arr = [];

        for($i = 0 ; $i < strlen($str) ; $i += $length)
            
            $arr[$i / $length] = ($i + $length < strlen($str)) ? substr($str, $i, $length) : substr($str, $i, strlen($str) - $i);

        return $arr;
    }

    // echo "<pre>";
    // print_r(string_split("aaaaaaaa"));
    // echo "</pre>";

    // echo "<pre>";
    // print_r(string_split("abcdefg", 2));
    // echo "</pre>";
    
    // echo "<pre>";
    // print_r(string_split("",5));
    // echo "</pre>";