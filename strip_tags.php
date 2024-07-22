<?php
    /*
        Function to remove the html tags from within a given string

        - Parameters
        ---- $str : The given string [Required]
    */

    function custom_strip_tags($input) {
        return preg_replace('/<[^>]*>/', '', $input);
    }
    
    echo(custom_strip_tags('<p>This is a <b>bold</b> paragraph with <a href="#">a link</a>.</p>')) ;
    