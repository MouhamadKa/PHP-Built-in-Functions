<?php
    // Implement similar_text function with loops
    // ! Have to do it also with recuirsive function
    function similarity($str1, $str2, &$per=0){
        $length = strlen($str1) + strlen($str2);
        $count = 0;

        for($i = 0; $i < strlen($str1); $i++):
            for($j = 0; $j < strlen($str2); $j++):
                if($str1[$i] == $str2[$j]):
                    $count++;
                    $str1 = substr($str1, 0 , $i) . substr($str1, $i + 1, strlen($str1) - $i - 1) ;
                    $str2 = substr($str2, 0 , $j) . substr($str2, $j + 1, strlen($str2) - $j - 1) ;

                    $i--;
                    $j--;

                    // echo "str1: " . $str1 . "<br>";
                    // echo "str2: " . $str2 . "<br>";
                    continue;
                endif;
            endfor; // End of the inner loop "On str2"
        endfor; // End of the outer loop "On str1"


        $per = $count / $length * 200; 
        return $count;
    }

    // $string1 = "Hello World";
    // $string2 = "Hello Dolly";
    // echo similar_text($string1, $string2, $perc) . " " . $perc . "<br>";
    // echo similarity($string1, $string2, $perc) . " " . $perc . "<br>";

    

    // $string1 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's/ 
    // standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type 
    // specimen book.It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially 
    // unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more 
    // recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

    // Why do we use it?
    // It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
    //  The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 
    //  'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors 
    //  now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their 
    //  infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the 
    //  like).";
    //  $string2 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
    // standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type 
    // specimen book.It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially 
    // unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more 
    // recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

    // Why do we use it?
    // It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
    //  The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 
    //  'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors 
    //  now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their 
    //  infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the 
    //  like).";

    //  echo similar_text($string1, $string2, $perc) . " " . $perc . "<br>";
    //  echo similarity($string1, $string2, $perc) . " " . $perc . "<br>";



    include("longest_match.php");
    function similarity_rec($str1, $str2, &$perc=0){
            // echo $str1 . " " . $str2 . "<br>"; 
            $match = strlen(longest_match($str1, $str2, $pos1, $pos2));
            
        if( $match != 0 )
            $match += similarity_rec( 
                substr($str1, 0, $pos1) . substr($str1, $pos1 + $match, strlen($str1) - $pos1 - $match),
                substr($str2, 0, $pos2) . substr($str2, $pos2 + $match, strlen($str2) - $pos2 - $match),
                $pos1, $pos2
            );

        $perc = $match / (strlen($str1) + strlen($str2)) * 200;
        return $match;
    }

    // $string1 = "Hello World";
    // $string2 = "Hello Dolly";
    // echo similar_text($string1, $string2, $perc) . " " . $perc . "<br>";
    // echo similarity_rec($string1, $string2, $perc) . " " . $perc . "<br>";

    // $string1 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's/ 
    // standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type 
    // specimen book.It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially 
    // unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more 
    // recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

    // Why do we use it?
    // It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
    //  The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 
    //  'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors 
    //  now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their 
    //  infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the 
    //  like).";
    //  $string2 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
    // standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type 
    // specimen book.It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially 
    // unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more 
    // recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

    // Why do we use it?
    // It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
    //  The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 
    //  'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors 
    //  now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their 
    //  infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the 
    //  like).";

    //  echo similar_text($string1, $string2, $perc) . " " . $perc . "<br>";
    //  echo similarity($string1, $string2, $perc) . " " . $perc . "<br>";