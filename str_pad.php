<?php
    /*
        The str_pad() function pads a string to a new length.

        - Parameters
        ---- $str: The string to pad [Require]
        ---- $length: Pad the string until its length is $length [Required] 
        ---- $char: The characters I pad the string with [Optional], Default = " "
        ---- $pad_Type: Specifies what side to pad the string [Optional], Default = STR_PAD_RIGHT
            * Possible values:
                STR_PAD_BOTH - Pad to both sides of the string. If not an even number, the right side gets the extra padding
                STR_PAD_LEFT - Pad to the left side of the string
                STR_PAD_RIGHT - Pad to the right side of the string. This is default
    */

    function string_pad($str, $length, $char = " ", $pad_type="STR_PAD_RIGHT"){
        $char = str_repeat($char, ceil(($length - strlen($str)) / strlen($char) ));
        $char = substr($char, 0 , $length - strlen($str));
        
        if($pad_type === "STR_PAD_RIGHT")   $str .= $char;
        elseif($pad_type === "STR_PAD_LEFT")    $str = $char . $str;
        elseif($pad_type === "STR_PAD_BOTH")
            $str = substr($char, 0 ,  ceil(strlen($char) / 2)) . $str . substr($char, ceil(strlen($char) / 2) ,  floor(strlen($char) / 2));

        return $str;
    }
    // echo string_pad("Wow", 6, "-x") . "<br>";
    // echo string_pad("Wow", 7, "-x") . "<br>";
    // echo string_pad("Wow", 6, "-x", "STR_PAD_LEFT") . "<br>";
    // echo string_pad("Wow", 7, "-x", "STR_PAD_LEFT") . "<br>";
    // echo string_pad("Wow", 6, "-x", "STR_PAD_BOTH") . "<br>";
    // echo string_pad("Wow", 7, "-x", "STR_PAD_BOTH") . "<br>";

