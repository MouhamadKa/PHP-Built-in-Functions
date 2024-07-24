<?php
    /*
        Function to catch the data from an array and put them in a nested array
    */

    function parse_string($str){
        $arr = [];
        $start = 0;
        $key = 0;

        for($i = 0 ; $i < strlen($str) ; $i++):
            if($str[$i] == "="):
                $key = substr($str, $start, $i - $start);
                $start = $i + 1;

            elseif($str[$i] == "&"): 
                $val = substr($str, $start , $i - $start);
                $arr[$key] = $val;
                $start = $i + 1;

            elseif($i == strlen($str) - 1):
                $val = substr($str, $start , $i - $start + 1);
                $arr[$key] = $val;
            endif;
        endfor;

        return $arr;
    }

    echo "<pre>";
    print_R(parse_string("name=mouhamad&age=500&x=y"));
    echo "</pre>";
    
    echo "<pre>";
    print_R(parse_string("name=mouhamad&age=500&x=y&email=m@g.com"));
    echo "</pre>";
    