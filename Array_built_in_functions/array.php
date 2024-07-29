<?php
    /*
        This fuction take multiple arguments and combine them in an array

        - Parameters
        ---- ...$arr: The list of arguments I want to combine them in the array 
    */

    function make_array(mixed ...$arr) :array {
        return [...$arr];
    }

    