<?php 

    // Training Link: https://www.codewars.com/kata/54bf1c2cd5b56cc47f0007a1/train/php

    /* Write a function that will return the count of distinct case-insensitive alphabetic characters 
    and numeric digits that occur more than once in the input string. 
    The input string can be assumed to contain only alphabets (both uppercase and lowercase) and numeric digits */

    // Initial thought: 
    //                  Change the string to lowercase, run a count callback function, whenever the count is more than 1, 
    //                  add 1 to the total variable!


    /* V2 thought: 

                By looking at PHP native functions, we find that we have array_count_values, which return an array of key/value 
                with the count of each key! Which is pretty awesome

    */
    
    function duplicateCount($text) {
        
        $total = 0;

        $text = array_count_values(str_split(strtolower($text)));

        foreach ($text as $letter) {
            if ($letter > 1) { $total++; }
        }
       

        return $total;
        
    }


?>