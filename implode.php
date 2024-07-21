<?php
    /*
        A finction to concatenate array elements in a string

        - Parameters
        ----  $arr: to concatenate its elememts [Required]
        ---- $sep: A seperation between the concatenated elements [Optional], Default = " " 
        
        I added the ability to start or end the implode in some index by adding these parameters
        ---- $start: To start the implode from this index [Optional] Default = 0
        ---- $end: To end the implode in this index [Optional] Default = -1 change to the size of array at the beganing
    
        Alias: join

    */

    function custom_implode($arr, $sep = " ", $start = 0, $end = null){
        if($end == null) $end = sizeof($arr) - 1;
        $res = (!empty($arr[$start]) && $end != -1) ? $arr[$start] : ""; 
        
        for($i = $start + 1 ; $i <= $end && $i < sizeof($arr); $i++):
            $res .= $sep . $arr[$i];
        endfor;

        return $res;
    }

    // echo custom_implode(["a", "b", "c", "d", "e", "f", "j"]) . "<br>";
    // echo custom_implode(["a", "b", "c", "d", "e", "f", "j"], '-') . "<br>";
    // echo custom_implode(["a", "b", "c", "d", "e", "f", "j"], '-' , start:2) . "<br>";
    // echo custom_implode(["a", "b", "c", "d", "e", "f", "j"], '-' , end:1) . "<br>";
    // var_dump(custom_implode(["a", "b", "c", "d", "e", "f", "j"], '-' , end:-1));
    // echo "<br>";
    // var_dump(custom_implode([], end:10));
    // echo "<br>";
    // var_dump(custom_implode(["a", "b", "c", "d", "e", "f", "j"], start:10, end:5));
    