<?php
    /*
        Function to repeat a string multiple times
        I added a feature to optionally choose a chracter to put between the repeated words

        - Parameters
        ---- $string -> The string to repeat [Mandatory]
        ---- $times -> How many times to repeat it [Mandatory]
        ---- $char -> a char to inser between repeated $strings [Optional] Default = ""
    
    */

    function string_repeat($string, $times, $char = ""){
        $result = "";
        while($times>0):
            if($result != "" && $char != "") $result .= $char;
            $result .= $string;
            $times--;
        endwhile;

        return $result;
    }

    // echo string_repeat("Mouhamad", 3, "-") . "<br>";
    // echo string_repeat("Mouhamad", 3, " & ") . "<br>";
    // echo string_repeat("Mouhamad", 3) . "<br>";