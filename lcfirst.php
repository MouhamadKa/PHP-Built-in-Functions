<?php
    // A function to make the first letter of a string in lower case
    function lower_first_letter($string){
        if($string != "")
            if(ord($string[0]) >= 65 && ord($string[0]) <= 90)
                $string[0] = chr(ord($string[0]) + 32);
        return $string;
    }
    
    // echo lower_first_letter("Habib, come to dubai") . "<br>";
    // echo lower_first_letter("Mouhamad Kasem") . "<br>";
    // echo lower_first_letter("mouhamad Kasem") . "<br>";
    // echo lower_first_letter("") . "<br>";

