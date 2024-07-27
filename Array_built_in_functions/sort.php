<?php
    /*
        This function sorts an indexed array in ascending order. It always returns true.

        - Parameters
        ---- &$arr: The array I want to sort [Required]
    */

    function my_sort(array &$arr) :bool {
        $res = [];
        $res[] = $arr[0];
        for($i = 1 ; $i < count($arr) ; $i++):
            for($j = $i - 1 ; $j >= 0 ; $j--):

                // echo "Compare ${arr[$i]} with ${res[$j]} <br> ";
                if($arr[$i] >= $res[$j]):
                    array_splice($res, $j + 1, 0, $arr[$i]);
                    break;
                endif;

                if($j == 0) array_unshift($res, $arr[$i]);
            endfor;
        endfor;

        $arr = $res;
        return true;
    }

    // $z = ["A", "C", "D", "F", "B", "B", "E"];
    // sort($z);
    // echo "<pre>";
    // print_r($z);
    // echo "</pre>";

    // $z = ["A", "C", "D", "F", "B", "B", "E"];
    // my_sort($z);
    // echo "<pre>";
    // print_r($z);
    // echo "</pre>";

    // $names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ahmad", "Sameh", "Gamal"];
    // sort($names);
    // echo "<pre>";
    // print_r($names);
    // echo "</pre>";

    // $names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ahmad", "Sameh", "Gamal"];
    // my_sort($names);
    // echo "<pre>";
    // print_r($names);
    // echo "</pre>";