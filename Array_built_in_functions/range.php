<?php
    /*
        The range() function creates an array containing a range of elements.
        This function returns an array of elements from start to end and a step between each sequential elements.

        - Parameters
        ---- $start: The start of the array [Required]
        ---- $end: The end of the array [Required]
        ---- $step: the step between each sequential elements [Required]
    */

    function my_range(mixed $start, mixed $end, mixed $step = 1) :array{
        if(is_string($start))
            $start = ord($start);
        if(is_string($end))
            $end = ord($end);
        
        $res = [];
        if($end > $start)
            for($i = $start; $i <= $end; $i += abs($step))
                $res[] = $i;
        else 
            for($i = $start; $i >= $end; $i -= abs($step))
                $res[] = $i;
        
        return $res;
    }

    // $arr = range(1.5, 10, 2.2);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    
    // $arr = my_range(1.5, 10, -2.2);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";


    // $arr = range(0,10);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    
    // $arr = my_range(0,10);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    

    // $arr = range(10, 1.5, 2.2);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    
    // $arr = my_range(10, 1.5, 2.2);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    

    // $arr = range(10, 10, 2.2);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    
    // $arr = my_range(10, 10, 2.2);
    // echo "<pre>";
    // print_r($arr);
    // echo "</pre>";
    