<?php
    /*
        The array_chunk() function splits an array into chunks of new arrays.
        
        - Parameters
        ---- $arr: The original array [Required]
        ---- $length: The length of the chunks [Required]
        ---- $preserve_keys: If I want to preserve the original keys in the new $array or not [Optional], Default = false
        
    */
    function arr_chunck($arr, $length, $preserve_keys = false){
        $count = 0;
        $res = [];
        
        foreach($arr as $key=>$val){
            // echo $key . " " . $val . "<br>";

            if($count % $length == 0) $res[$count / $length] = [];

            if($preserve_keys)
                $res[(int) ($count / $length)] += array($key=>$val);
            else
                array_push($res[(int) ($count / $length)], $val);

            $count++;
        }

        return $res;    
    }

    // $cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
    // echo "<pre>";
    // print_r(arr_chunck($cars,2));
    // echo "<pre>";
    // echo "<br>############################<br>";

    // $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
    // echo "<pre>";
    // print_r(arr_chunck($age,2,true));
    // echo "<pre>";
    // echo "<br>############################<br>";

    // $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
    // echo "<pre>";
    // print_r(arr_chunck($age,2));
    // echo "<pre>";
    // echo "<br>############################<br>";

    // $friends = ["O" => "Osame", "A" => "Ahmad", "S" => "Sameh", "M" => "Mahmoud", "J" => "Jamal"];
    // echo "<pre>";
    // print_r(arr_chunck($friends,2));
    // echo "<pre>";
    // echo "<br>############################<br>";

    // $friends = ["O" => "Osame", "A" => "Ahmad", "S" => "Sameh", "M" => "Mahmoud", "J" => "Jamal"];
    // echo "<pre>";
    // print_r(arr_chunck($friends,2,true));
    // echo "<pre>";
    // echo "<br>############################<br>";

    // $empty_arr = [];
    // echo "<pre>";
    // print_r(arr_chunck($empty_arr,2,true));
    // echo "<pre>";
    // echo "<br>############################<br>";

