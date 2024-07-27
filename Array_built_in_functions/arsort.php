<?php
    /*
        This function sort assosiative array in an descenig order based on its values

        - Parameters: 
        ---- &$arr: The array I want to sort [Required]
    */

    function my_arsort(array &$arr) :bool {
        $res = [];
        $first_element = true;

        foreach($arr as $key => $val):
            if($first_element):
                $res[$key] = $val;
                $first_element = false;
                continue;
            endif;

            $count = 0;
            foreach($res as $res_key => $res_val):
                $count++; 
                // echo "Compare $val with $res_val <br>";
                if($val >= $res_val):
                    $res = array_splice($res,0,$count-1) + [$key => $val] + array_splice($res,0);
                    
                    // echo "From Inside and count = $count<pre>";
                    // print_r($res);
                    // echo "</pre>";
                    break;
                endif;

                if($count == count($res)) $res[$key] = $val;
                // echo "From Outside<pre>";
                // print_r($res);
                // echo "</pre>";
            endforeach;

        endforeach;

        $arr = $res;
        return true;
    }


    // $names = ["O" => "Osama", "M" => "Mahmoud", "A" => "Ahmad", "S" => "Sameh", "G" => "Gamal"];
    // arsort($names);
    // echo "<pre>";
    // print_r($names);
    // echo "</pre>";


    // $names = ["O" => "Osama", "M" => "Mahmoud", "A" => "Ahmad", "S" => "Sameh", "G" => "Gamal"];
    // my_arsort($names);
    // echo "<pre>";
    // print_r($names);
    // echo "</pre>";


    // $countries = ["S" => "Syria" , "E" => "Egypt", "I" => "Iraq", "Q" => "Qatar"];
    // arsort($countries);
    // echo "<pre>";
    // print_r($countries);
    // echo "</pre>";

    // $countries = ["S" => "Syria" , "E" => "Egypt", "I" => "Iraq", "Q" => "Qatar"];
    // my_arsort($countries);
    // echo "<pre>";
    // print_r($countries);
    // echo "</pre>";