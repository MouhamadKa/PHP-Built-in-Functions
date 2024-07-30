<?php
    /*
        Finds lowest value

        - Parameters
        ---- ...$values: multiple values to find their minimum [Required]
    */

    function my_min(mixed ...$values) :mixed {
        $min = null;
        foreach($values as $val)
            if($min == null || $val <= $min)
                $min = $val;
        
            
        return $min;
    }

    echo my_min(1,2,3,4,5,-6,10,-9) . "<br>";
    
    echo "<pre>";
    print_R(my_min([1,2,3,4],[5,-6,10,-9]));
    echo "<pre>";

    echo "<pre>";
    print_R(my_min([1,2,3,4], [5,0,11,0], [5,-6,10,-9]));
    echo "<pre>";

    echo "<pre>";
    print_R(my_min([1,2,3,4], [-5,3,11,0], [5,-6,10,-9]));
    echo "<pre>";