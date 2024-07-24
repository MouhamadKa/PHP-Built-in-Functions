<?php
    /*
        The quotemeta() function adds backslashes in front of some predefined characters in a string.

        The predefined characters are:
            ---- period (.)
            ---- backslash (\)
            ---- plus sign (+)
            ---- asterisk (*)
            ---- question mark (?)
            ---- brackets ([])
            ---- caret (^)
            ---- dollar sign ($)
            ---- parenthesis (())
        This function can be used to escape characters with special meanings, such as ( ), [ ], and * in SQL.

        - Parameters :
            ---- $str : The string to add backslaches in
    */

    function my_quotemeta($str){
        $res = "";
        $characters = [".", "\\", "+", "*", "?", "[", "]", "^", "$", "(", ")"];

        for($i = 0 ; $i < strlen($str) ; $i++):
            if(in_array($str[$i], $characters)):
                $res .= "\\" . $str[$i];
            else: $res .= $str[$i];
            endif;
        endfor;

        return $res;
    }

    // $str = "Hello world. (can you hear me?)";
    // echo quotemeta($str) . "<br>";
    // echo my_quotemeta($str) . "<br>";


    // $str1 = "1 + 1 = 2";
    // $str2 = "1 * 1 = 1";
    // $str3 = "Could you borrow me 5$?";
    // $str4 = "Are you not entertained? (I am..)";
    // $str5 = "The caret [ ^ ] Looks like a hat!";

    // echo quotemeta($str1)."<br>";
    // echo my_quotemeta($str1)."<br>";

    // echo quotemeta($str2)."<br>";
    // echo my_quotemeta($str2)."<br>";
    
    // echo quotemeta($str3)."<br>";
    // echo my_quotemeta($str3)."<br>";
   
    // echo quotemeta($str4)."<br>";
    // echo my_quotemeta($str4)."<br>";
    
    // echo quotemeta($str5)."<br>";
    // echo my_quotemeta($str5)."<br>";