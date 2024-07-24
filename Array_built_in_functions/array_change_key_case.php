<?php
    /*
        This function change the case of an array keys to uppercase or lowercase.

        - Parameters
        ---- $arr: The array to change its keys case [Required]
        ---- $case: CASE_UPPER or CASE_LOWER [Optional], Default = CASE_LOWER 
    */

    function change_array_key_case (&$arr, $case = CASE_LOWER){
        $keys = [];
        $vals = [];
        foreach($arr as $key => $val):
            for($i = 0 ; $i < strlen($key) ; $i++):
                if($case === CASE_UPPER && ord($key[$i]) >= 97 && ord($key[$i]) <= 122)
                    $key[$i] = chr(ord($key[$i]) - 32);
                
                if($case === CASE_LOWER && ord($key[$i]) >= 65 && ord($key[$i]) <= 90)
                    $key[$i] = chr(ord($key[$i]) + 32);
            endfor;
                
            array_push($keys, $key);
            array_push($vals, $val);
        endforeach;

        return array_combine($keys, $vals);
    }

    
    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
    echo "<pre>";
    print_r(change_array_key_case($age));
    echo "<pre>";
    echo "<br>############################<br>";

    
    $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
    echo "<pre>";
    print_r(change_array_key_case($age, CASE_UPPER));
    echo "<pre>";
    echo "<br>############################<br>";