<?php
    /*
        Finds highest value

        - Parameters
        ---- ...$values: multiple values to find their maximum [Required]
    */

    function my_max(mixed ...$values) :mixed {
        $max = null;
        foreach($values as $val)
            if($max == null || $val >= $max)
                $max = $val;
        
            
        return $max;
    }

    // echo my_max(1,2,3,4,5,-6,10,-9) . "<br>";
    
    // echo "<pre>";
    // print_R(my_max([1,2,3,4],[5,-6,10,-9]));
    // echo "<pre>";

    // echo "<pre>";
    // print_R(my_max([1,2,3,4], [5,0,11,0], [5,-6,10,-9]));
    // echo "<pre>";

    // echo "<pre>";
    // print_R(my_max([1,2,3,4], [5,3,11,0], [5,-6,10,-9]));
    // echo "<pre>";