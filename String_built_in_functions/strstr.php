<?php
    /*
        Function to return a fraction of string from an index where another string founded
        
        - Parameters
        ---- $string to search in [Required]
        ---- $sord: to fincd inside the string [Required]
        ---- before: grab what before or after the word [Optional], Default = fasle
    */
    function my_str_str($string, $word, $before=false){

        for($i = 0; $i < strlen($string) - strlen($word); $i++):
            if(substr($string, $i, strlen($word)) === $word):
                if($before) return substr($string,0,$i);
                else return substr($string, $i, strlen($string) - $i);
            endif;
        endfor;

    }


    // echo my_str_str("Elzero Web School", "W") . "<br>";
    // echo my_str_str("Elzero Web School", "W") . "<br>";
    // echo my_str_str("Elzero Web School", "W", true) . "<br>";
    // echo my_str_str("Elzero Web School", "E") . "<br>";
    // echo my_str_str("Elzero Web School", "e", true) . "<br>";
    // var_dump(my_str_str("Elzero Web School", "E", true));

