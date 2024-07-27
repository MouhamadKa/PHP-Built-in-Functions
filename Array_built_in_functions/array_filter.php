<?php
    /*
        The array_filter() function filters the values of an array using a callback function.
        This function passes each value of the input array to the callback function. If the callback function returns true, 
        the current value from input is returned into the result array. Array keys are preserved.

        - Perameters
        ---- $arr: To process the filtering based on its keys, values or both [Required]
        ---- $func: Determines the filtering criteria [Required]
        ---- $flag: [optional], Default = 0
                if flag = 0 -> filter based on the values
                if flag = ARRAY_FILTER_USE_KEY -> filter based on the keys
                if flag = ARRAY_FILTER_USE_BOTH -> filter based on the values and keys together
    */

    function my_array_filter(array $arr, callable $func, $flag = 0) :array{
        $res = [];
        
        foreach($arr as $key => $val):
            if($flag === 0 && $func($val))
                $res[$key] = $val;
            elseif($flag === ARRAY_FILTER_USE_KEY && $func($key))
                $res[$key] = $val;
            elseif($flag === ARRAY_FILTER_USE_BOTH && ($func($val) || $func($key)))
                $res[$key] = $val;

        endforeach;

        return $res;
    }

    $a = [1 => 12, 2 => 75, 3 => 1, 4 => -13];

    function filter_value_based ($val){
        return $val > 3;
    }

    echo "<pre>";
    print_r(array_filter($a, "filter_value_based"));
    echo "</pre>";

    echo "<pre>";
    print_r(my_array_filter($a, "filter_value_based"));
    echo "</pre>";


    echo "<pre>";
    print_r(array_filter($a, "filter_value_based", ARRAY_FILTER_USE_KEY));
    echo "</pre>";

    echo "<pre>";
    print_r(my_array_filter($a, "filter_value_based", ARRAY_FILTER_USE_KEY));
    echo "</pre>";


    echo "<pre>";
    print_r(array_filter($a, "filter_value_based", ARRAY_FILTER_USE_BOTH));
    echo "</pre>";

    echo "<pre>";
    print_r(my_array_filter($a, "filter_value_based", ARRAY_FILTER_USE_BOTH));
    echo "</pre>";