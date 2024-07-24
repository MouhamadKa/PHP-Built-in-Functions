<?php
    /*
        This function checks if a kes exists within an array

        - Parameters
        ---- $search: To search if exists or not [Required]
        ---- $arr: To search in [Required]
    */

    function my_array_key_exists($search, $arr){
        foreach($arr as $key=>$val)
            if($key == $search)
                return true;

        return false;
    }

    // $arr = [1=>"Ahmad", "B"=>["Basma", "Basem"], "C"=>"Camal"];
    // var_dump(array_key_exists("1", $arr));
    // echo "<br>";
    
    // $arr = [1=>"Ahmad", "B"=>["Basma", "Basem"], "C"=>"Camal"];
    // var_dump(my_array_key_exists("1", $arr));
    // echo "<br>";    

    // $arr = [1=>"Ahmad", "B"=>["Basma", "Basem"], "C"=>"Camal"];
    // var_dump(array_key_exists("5", $arr));
    // echo "<br>";
    
    // $arr = [1=>"Ahmad", "B"=>["Basma", "Basem"], "C"=>"Camal"];
    // var_dump(my_array_key_exists("5", $arr));
    // echo "<br>";    

    // $arr = [];
    // var_dump(array_key_exists("1", $arr));
    // echo "<br>";
    
    // $arr = [];
    // var_dump(my_array_key_exists("1", $arr));
    // echo "<br>";    


