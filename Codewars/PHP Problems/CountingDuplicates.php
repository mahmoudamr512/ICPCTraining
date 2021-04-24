<?php 

    // Training Link: https://www.codewars.com/kata/54bf1c2cd5b56cc47f0007a1/train/php

    /* Write a function that will return the count of distinct case-insensitive alphabetic characters 
    and numeric digits that occur more than once in the input string. 
    The input string can be assumed to contain only alphabets (both uppercase and lowercase) and numeric digits */

    // Initial thought: 
    //                  Change the string to lowercase, run a count callback function, whenever the count is more than 1, 
    //                  add 1 to the total variable!

    function duplicateCount($text) {
        
        $text = strtolower($text); $total = 0;

        $chars = range('a','z'); $numbers = range(0,9);

        foreach ($chars as $char) {
            if (substr_count($text, $char) > 1) {
                $total++;
            }  
        }

        foreach ($numbers as $number) {
            if (substr_count($text, $number) > 1) {
                $total++;
            }  
        }

        return $total;
        
    }


?>