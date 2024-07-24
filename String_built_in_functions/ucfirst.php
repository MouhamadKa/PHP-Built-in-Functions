<?php
    // Function to make the first letter in a string in upper case

    function upper_first_letter($string){
        if($string != "")
            if(ord($string[0]) >= 90 &&  ord($string[0]) <= 122)
                $string[0] = chr(ord($string[0]) - 32);        
        
        return  $string;
    }
    
    // echo upper_first_letter("habib, come to dubai") . "<br>";
    // echo upper_first_letter("Mouhamad Kasem") . "<br>";
    // echo upper_first_letter("mouhamad Kasem") . "<br>";
    // echo upper_first_letter("") . "<br>";

