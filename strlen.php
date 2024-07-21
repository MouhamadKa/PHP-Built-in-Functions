<?php
    /*
        A function to calculate the number of characters of a string
        
        - Parameters
        ---- $string : The string to caluclate its length ["Required"]
    */

    function length($string){
        $count = 0;
        while(!empty($string[$count]))
            $count++;
        return $count;
    }

    // echo "Length of (Hello) is: " . length("Hello") . "<br>";
    // echo "Length of (Hello My Name Is Mouhamad) is: " . length("Hello, My Name Is Mouhamad") . "<br>";
    // echo "Length of (Why are you fucking calculating my length) is: " . length("Why are you fucking calculating my length") . "<br>"; 
    // echo "Length of (Why are you fucking calculating my length) is: " . strlen("Why are you fucking calculating my length") . "<br>"; 