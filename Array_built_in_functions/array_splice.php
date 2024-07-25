<?php
    /*
        This function cut out a part of an array from $start index and of the lenth $length. and optionally put in the places of
        the other removed values.

        - Parameters
        ---- $arr: The origin array [Required]
        ---- $start: The starting index of the cropped part [Required]
        ---- $$length: The length of the cropped part [Required]
        ---- ...$replace: One or more values to take place instead of the cropped part [Optional]

        It returns the cropped part, and it affects the origin array.
    */

    function my_array_splice(array &$arr, int $start, int $length, ...$replace) :array {
        $start = ($start >= 0) ? $start : count($arr) - $start;
        if($length === null) $length = count($arr) - $start;
        $end = ($length > 0) ? $start + $length -1  : count($arr) + $length - $start;

        $result_array = [];
        $source_array = [];
        $index = 0;
        foreach($arr as $key => $val):
            if($index >= $start && $index <= $end):
                echo  $key . " " . $val . "<br>";
                if(gettype($key) === "integer" || gettype($key) === "double" || (gettype($key) === "string" &&
                 ord($key) >= 48 && ord($key) < 58))
                    $result_array[] = $val;
                else $result_array[$key] = $val;

                if($index === $end):
                    foreach($replace as $new_val):
                        $source_array[] = $new_val;
                    endforeach; 
                endif;

            else:{ // This if the element outside the removed range
                if(gettype($key) === "integer" || gettype($key) === "double" || (gettype($key) === "string" &&
                ord($key) >= 48 && ord($key) < 58))
                    $source_array[] = $val;
                else $source_array[$key] = $val;
            }
            endif;
            
            $index++;
        endforeach;

        $arr = $source_array;
        return $result_array;
    }

    // $arr = [1 => "A", "s" => 2 , 3 => 3 , 4 => 4 , 5];
    // print_r(array_splice($arr,0,2));
    // echo "<br>";
    // print_r($arr);
    // echo "<br>";

    // $arr = [1 => "A", "s" => 2 , 3 => 3 , 4 => 4 , 5];
    // print_r(my_array_splice($arr,0,2));
    // echo "<br>";
    // print_r($arr);
    // echo "<br>";

    

    // $arr = [1 => "A", 2 => "B", 3 => "C", 4 => "D", 5 => "E", 6 => "F", 7 => "G", 8 => "H"];
    // echo "<pre>";
    // print_r(array_splice($arr,1,2, ["x", "y", "z"]));
    // echo "</pre>";
    // echo "<br>";
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    // echo "<br>";

    // $arr = [1 => "A", 2 => "B", 3 => "C", 4 => "D", 5 => "E", 6 => "F", 7 => "G", 8 => "H"];
    // echo "<pre>";
    // print_r(my_array_splice($arr,1,2, ...["x", "y", "z"]));
    // echo "</pre>";
    // echo "<br>";
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    // echo "<br>";