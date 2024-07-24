<?php
    /*
        A function to search for a string inside another string, return the index of the first match or false

        - Parameters
        ---- $str : To search in [Required]
        ---- $word : To search for [Required]
        ---- $start : an index to start the search from [Optional], Default = 0
    */

    function str_pos($str, $word, $start = 0){
        for($i = $start; $i < strlen($str) - strlen($word); $i++){
            if($word === substr($str, $i, strlen($word)))
                return $i;
        }

        return false;
    }

    // echo str_pos("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "a") . "<br>";
    // echo str_pos("Mouhamad", "a") . "<br>";
    // echo str_pos("Mouhamad", "a",5) . "<br>";
    // echo str_pos("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "a", 4) . "<br>";
    // echo str_pos("x", "a", 4) . "<br>";