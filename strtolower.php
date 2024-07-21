<?php
    // Function to make all the words in a s tring start with lower case letter
    include_once("lcfirst.php");


    function to_lower($string){
        if($string != ""):
            $string[0] = lower_first_letter($string[0]);
            for($i = 1; $i < strlen($string); $i++)
                if($string[$i - 1] === " ")
                    $string[$i] = lower_first_letter($string[$i]);
        endif;

        return $string;   
    }
    
    // echo to_lower("Habib, Come TO DDDubai") . "<br>";
    // echo to_lower("Mouhamad Kasem") . "<br>";
    // echo to_lower("mouhamad Kasem") . "<br>";
    // echo to_lower("") . "<br>";

    