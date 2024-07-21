<?php
    /*
        A function to search for a string inside another string, return the index of the last match or false

        - Parameters
        ---- $str : To search in [Required]
        ---- $word : To search for [Required]
        ---- $start : an index to start the search from [Optional], Default = 0
    */

    function str_rpos($str, $word, $start = 0){
        for($i = strlen($str) - strlen($word); $i >= $start; $i--)
            if(substr($str, $i, strlen($word)) === $word)
                return $i;

        return false;
    }

    
    echo str_rpos("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "a") . "<br>";
    echo str_rpos("Mouhamad", "a") . "<br>";
    echo str_rpos("Mouhamad", "a",5) . "<br>";
    echo str_rpos("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa", "a", 4) . "<br>";
    echo str_rpos("x", "a", 4) . "<br>";
    echo (strlen("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"));