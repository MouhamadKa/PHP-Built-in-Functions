<?php
    /*
        Function to split a string into chuncks of tall "length" and insert a specific string between them

        - Parameters
        ---- $str : The origin string [Required]
        ---- $length : the length of each chunk [Optional], Default = 76
        ---- $end : the string to be inserted between the chunks [Optional], Default = " " 
    */

    function split_to_chunks($str, $length = 76, $end = " "){
        if($length <= 0) return "Chunck length must be a positive number larger than zero";
        if(empty($str[0])) return $end;
        
        $res = $str[0];
        for($i = 1; $i < strlen($str); $i++)
            $res = ($i % $length == $length-1) ? $res . $str[$i] . $end  :  $res . $str[$i] ;

        return $res;
    }

    // echo split_to_chunks("aaaaaaaaaaaaaaaaa", 4, "-") . "<br>";
    // echo split_to_chunks("aaaaaaaaaaaaaaaa", 4, "-") . "<br>";
    // echo split_to_chunks("", 4, "-") . "<br>";