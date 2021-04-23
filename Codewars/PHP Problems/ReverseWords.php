<?php 

// Training link: https://www.codewars.com/kata/5259b20d6021e9e14c0010d4/train/php

// Question: Complete the function that accepts a string parameter, and reverses each word in the string. 
// All spaces in the string should be retained.


// Explode sentence into an array of words, loop through each word and reverse it and 
// then combine the words using spaces. DONE

function reverseWords($str) {

    $words = explode(' ', $str);

    $rev = [];

    foreach ($words as $word) {
        array_push($rev, strrev($word));
    }

    return join(" ", $rev);
    
  }




?>