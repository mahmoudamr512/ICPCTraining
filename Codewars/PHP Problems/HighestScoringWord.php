<?php 
// The following problem is at: https://www.codewars.com/kata/57eb8fcdf670e99d9b000272/train/php

// Don't copy PHP Closing and ending tags, just copy the functions!


// First We create the Integer/Character map! Then we break the string
// into a set of words. Loop through the array of words, 
// then loop through every every word, 
// loop through the letters of the word! Get the total and save it. 


// This function passed all tests!
function high($x) {
  
    // create an associative array of chars as keys and their number as value.
    $table = array_combine(range('a','z'), range(1,26));
    
    // $x is a sentence, we can change it to array of words. 
    $words = explode(' ', $x);

    // Array of indecies of words and their total. 
    $total = [];

    // Now loop over words, and make another loop to loop over each letter!
    // Get the total and push it to associative array.
    foreach($words as $word) {
        $totalCount = 0;
        for($i = 0; $i < strlen($word); $i++) {
            $letter = $word[$i];
            $totalCount += $table[$letter];
        }
        
        $total[$word] = $totalCount;
    }


    // Time to choose the highest value!

    return array_search(max($total), $total);
  }

  // For testing Edge Cases, don't copy it!
  high("bc cb");

?>