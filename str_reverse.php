<?php
    /*
        Function to reverse a string

        - Parameteers 
        ---- $string: To reverse

        I added the functionality to rerse only a portion of the strind and keep the rest in order using
        ---- $start: The beganing of the part I should reverse. [Optionale] Default = 0
        ---- $end: The end of the part I should reverse. [Optional] Default = null
    */

    function reverse($string, $start = 0, $end = null){
        if($end == null) $end = strlen($string) - 1;
        $counter = 0;
        for($i = $start; $counter < ($end - $start) / 2 ; $i++):
            $temp = $string[$i];
            $string[$i] = $string[$end - $i + $start];
            $string[$end - $i + $start] = $temp;

            $counter++;
        endfor;

        return $string;
    }


    // echo reverse("Mouhamad") . "<br>";
    // echo reverse("Mouhamad", 3) . "<br>";
    // echo reverse("Mouhamad", end:6) . "<br>";
    // echo reverse("Mouhamad", end:1) . "<br>";