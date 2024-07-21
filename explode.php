<?php
    /*
        A function to divide a string to chuncks based on some seperator and put them in an array

        - Parameters
        ---- $string: to chunck [Required]
        ---- $seperator: [Optional] default = " "
        
        I added the ability to start or end the explode in some index by adding these parameters
        ---- $start: To start the explode from this index [Optional] Default = 0
        ---- $end: To end the explode in this index [Optional] Default = -1 change to the length of the string at the beganing
    */

    include("append.php");

    function custom_explode($string, $sep = " " , $start = 0 , $end = null){
        if($end == null) $end = strlen($string);
        $arr = [];
        $index = $start;

        for($i = $start ; $i < strlen($string) && $i <= $end; $i++):
            if($string[$i] == $sep):
                // echo "XXXXXXXXXX<br>";
                $arr = append($arr, substr($string, $index, $i - $index));
                $index = $i + 1;
            endif;
        endfor;

        if(substr($string, $index, $i-$index) != "") 
            $arr = append($arr, substr($string, $index, $i - $index));

        return $arr;
    }


    // echo '<pre>';
    // print_r(custom_explode("I am Mouhamad "));
    // echo '</pre>';
    
    // echo '<pre>';
    // print_r(custom_explode("I am Mouhamad, I am 25 years old."));
    // echo '</pre>';