<?php
    /*
        Function to return a fraction of string from an index where another string founded "Case In-sesitive"
        
        - Parameters
        ---- $string to search in [Required]
        ---- $sord: to fincd inside the string [Required]
        ---- before: grab what before or after the word [Optional], Default = fasle
    */

    include("strtolower.php");


    function my_str_istr($string, $word, $before=false){

        $string1 = to_lower($string);
        $word = to_lower($word);

        for($i = 0; $i < strlen($string) - strlen($word); $i++):
            if(substr($string1, $i, strlen($word)) === $word):
                if($before) return substr($string,0,$i);
                else return substr($string, $i, strlen($string) - $i);
            endif;
        endfor;

    }


    // echo my_str_istr("Elzero Web School", "W") . "<br>";
    // echo my_str_istr("Elzero Web School", "w") . "<br>";
    // echo my_str_istr("Elzero Web School", "W", true) . "<br>";
    // echo my_str_istr("Elzero Web School", "e") . "<br>";
    // echo my_str_istr("Elzero Web School", "e", true) . "<br>";
    // var_dump(my_str_istr("Elzero Web School", "E", true));

