<?php
    /*
        This function reverse an array elements

        - Parameters:
        ---- $arr: The source array [Required]
        ---- $preserve: If I want each value to preserve its key or not [Optional], Default = false
    */

    function my_array_reverse(array $arr, bool $preserve=false) :array {
        $temp = [];
        $count = 0;

        foreach($arr as $key=>$val):
            $temp[$count] = ($preserve) ? [$key=>$val] : $val;
            $count++;
        endforeach;

        $res = [];
        for($i = sizeof($temp) - 1 ; $i >= 0 ; $i--):
            if($preserve){
                foreach($temp[$i] as $key=>$val)
                    $res[$key] = $val;                
            }
            else 
            array_push($res, $temp[$i]);
        endfor;

        return $res;
    }

    // $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
    // echo "<pre>";
    // print_r(my_array_reverse($age));
    // echo "<pre>";
    // echo "<br>############################<br>";

    // $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
    // echo "<pre>";
    // print_r(my_array_reverse($age,true));
    // echo "<pre>";
    // echo "<br>############################<br>";

    // $age=array();
    // echo "<pre>";
    // print_r(my_array_reverse($age,true));
    // echo "<pre>";
    // echo "<br>############################<br>";

    // $arr = ["A"=>"Ahmad", "B"=>["Basma", "Basem"], "C"=>"Camal"];
    // echo "<pre>";
    // print_r(my_array_reverse($arr,true));
    // echo "<pre>";
    // echo "<br>############################<br>";

    // $arr = ["A"=>"Ahmad", "B"=>["Basma", "Basem"], "C"=>"Camal"];
    // echo "<pre>";
    // print_r(my_array_reverse($arr,false));
    // echo "<pre>";
    // echo "<br>############################<br>";

