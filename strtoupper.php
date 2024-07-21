<?php
    // Function to make all the words in a s tring start with upper case letter
    include_once("ucfirst.php");


    function to_upper($string){
        if($string != ""):
            $string[0] = upper_first_letter($string[0]);
            for($i = 1; $i < strlen($string); $i++)
                if($string[$i - 1] === " ")
                    $string[$i] = upper_first_letter($string[$i]);
        endif;

        return $string;   
    }
    
    // echo to_upper("Habib, come TO dDDubai") . "<br>";
    // echo to_upper("Mouhamad Kasem") . "<br>";
    // echo to_upper("mouhamad Kasem") . "<br>";
    // echo to_upper("") . "<br>";

    