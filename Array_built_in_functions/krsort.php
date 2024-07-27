<?php
    /*
        This function sort assosiative array in an descending order based on its keys

        - Parameters: 
        ---- &$arr: The array I want to sort [Required]
    */

    function my_ksort(array &$arr) :bool {
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
                if($key >= $res_key):
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

    $languages = ["Syria" => "Arabic", "Spain" => "Spanich", "USA" => "English", "Germany" => "Deutch"];
    my_ksort($languages);
    echo "<pre>";
    print_r($languages);
    echo "</pre>";


    $languages = ["Syria" => "Arabic", "Spain" => "Spanich", "USA" => "English", "Germany" => "Deutch"];
    my_ksort($languages);
    echo "<pre>";
    print_r($languages);
    echo "</pre>";


    $continent = ["Syria" => "Asia", "Palestine" => "Asia", "USA" => "North America", "Egypt" => "Africa", "Spain" => "Europe"];
    my_ksort($continent);
    echo "<pre>";
    print_r($continent);
    echo "</pre>";

    $continent = ["Syria" => "Asia", "Palestine" => "Asia", "USA" => "North America", "Egypt" => "Africa", "Spain" => "Europe"];
    my_ksort($continent);
    echo "<pre>";
    print_r($continent);
    echo "</pre>";