<?php
    /*
        Function to make all the words in a text start with upper case letter

        - Parameters
        ---- $text: to capitalize its words [Required]
    */

    function upper($text){
        if(ord($text[0]) >= 97 && ord($text[0]) <= 122) $text[0] = chr(ord($text[0]) - 32);
        for($i = 1; $i < strlen($text) ; $i++)
            if($text[$i-1] == " " && ord($text[$i]) > 97 && ord($text[0]) <= 122)
                $text[$i] = chr(ord($text[$i]) - 32);

        return $text;
    }

    // echo upper("I love PHP<br>");
    // echo upper("What is the capital of hahaha<br>");
    // echo upper("go to hell");