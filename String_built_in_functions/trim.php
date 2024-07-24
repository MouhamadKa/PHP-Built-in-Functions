<?php
    /*
        trim, ltrim, rtrim
        Functions to trancate extra caracters from the two sides or one of them

        - Parameters
        ---- $str : The string to be trimed [Required]
        ---- $char_list : to be deleted
    */

    function left_trim($str, $char_list){
        $res = "";

        for($i = 0; $i < strlen($str) ; $i++)
            if(strpos($char_list, $str[$i]) !== false)
                $res = substr($str, $i + 1, strlen($str) - $i);
            else return $res;

        return $res;
    }

    // echo left_trim("##########aaaaaaaaaaaa$$$$$$$$", "#$") . "<br>";
    // echo left_trim("##########$$$$$$########", "$#") . "<br>";
    // var_dump(left_trim("#", "#"));

    function right_trim($str, $char_list){
        $res = "";

        for( $i = strlen($str) - 1; $i >= 0 ; $i--)
            if(strpos($char_list, $str[$i]) !== false)
                $res = substr($str, 0, $i);
            else return $res;

        return $res;
    }
    
    // echo right_trim("##########a$$$$###$$$$", "#$") . "<br>";
    // echo right_trim("##########$$$$$$########", "$#") . "<br>";
    // var_dump(right_trim("#", "#"));

    function lr_trim($str, $char_list){
        $res = left_trim($str, $char_list);
        $res = right_trim($res, $char_list);

        return $res;
    }

    // echo lr_trim("##########a$$$$###$$$$", "#$") . "<br>";
    // echo lr_trim("##########$$$$$$########", "$#") . "<br>";
    // echo lr_trim("##########abcdefg$$$$$$########", "$#") . "<br>";
    // var_dump(lr_trim("#", "#"));
