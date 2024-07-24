<?php
    /*
        Replace some characters with others withing a giving string

        - Parameters
        ---- $str: The original string [Required]
        ---- $from: A string so its charachters will be replaced [Required]
        ---- $to: A string so its characters will takeplace over the old characters [Required]
    */

    function str_tr($str, $from, $to){
        for($i = 0; $i < strlen($str) ; $i++)
            if(str_contains($from, $str[$i]) && !empty($to[strpos($from, $str[$i])]))
                $str[$i] = $to[strpos($from, $str[$i])];

        return $str;
    }

    // echo strtr("Hilla Warld","ia","eo") . "<br>";
    // echo str_tr("Hilla Warld","ia","eo") . "<br>";