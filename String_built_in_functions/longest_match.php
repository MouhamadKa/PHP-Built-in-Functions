<?php
    // Function to calculate the longest match between to strings
    // I added the availability to delivere the position of the match
    function longest_match($str1, $str2, &$pos1 = -1, &$pos2 = -1){
        $max = 0;
        for($i = 0 ; $i < strlen($str1) ; $i++):
            $temp_pos1 = $i;

            for($j = 0 ; $j < strlen($str2) ; $j++):
                $temp_pos2 = $j;
                $counter = 0;

                // echo $str1[$i] . "--------------" . $str2[$j] . "<br>";
                while($str1[$i] === $str2[$j]):
                    $counter++;
                    $i++;
                    $j++;

                    if(empty($str1[$i]) || empty($str2[$j])) break;

                endwhile;

                if($counter >= $max):
                    $max = $counter;
                    $pos1 = $temp_pos1;
                    $pos2 = $temp_pos2;
                endif;

                $i = $temp_pos1;
            endfor; // End loop over the second string 

        endfor; // End loop over the first string
        if($pos1 != -1)
            return substr($str1, $pos1, $max);
        else return 0;
    }


    // echo longest_match("Elzero Web", "Elzer0 Web") . "<br>";
    // echo "##############################################<br>";
    // echo longest_match("Elzero Web", "Elzer0 Web", $pos1, $pos2) . " " . $pos1 . " " . $pos2 . "<br>";
    // echo "##############################################<br>";
    // echo longest_match("Elzero Web School", "Elzer0 Web School") . "<br>";
    // echo "##############################################<br>";
    // echo longest_match("I want to drink coffee", "I want to drink coffee") . "<br>";
    // echo "##############################################<br>";
    // echo longest_match("I want to drink coffee", "x") . "<br>";
    // echo "##############################################<br>";
    // echo longest_match("", "") . "<br>";
    // echo "##############################################<br>";
    // echo longest_match("I want to drink coffee", "xxxcoffee lakf") . "<br>";
    // echo "##############################################<br>";
    // echo longest_match("I want to drink coffee", "xxxcoffee lakf", $pos1, $pos2) . " " . $pos1 . " " . $pos2 . "<br>";
    // echo "##############################################<br>";
    // echo longest_match("I want to drink coffee", "") . "<br>";
    // echo "##############################################<br>";
    // echo longest_match("I want to drink coffee", "", $pos1, $pos2) . " " . $pos1 . " " . $pos2 . "<br>";
    // echo "##############################################<br>";
    