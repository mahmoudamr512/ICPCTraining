<?php 


/* Solver: Mahmoud Amr! */

// Training link: https://www.codewars.com/kata/56a5d994ac971f1ac500003e/train/php

// You are given an array(list) strarr of strings and an integer k. 
// Your task is to return the first longest string consisting of 
// k consecutive strings taken in the array.

// 6 Kyu


// My initial thoughts is an O(n) algorithim. I will loop throught the array from 0 to n-1 with i + k steps 
// concatenate the current word with the next, and keep the results in an associative array and use max();

function longestConsec($strarr, $k) {
  
    

    $total = [];
    
    for ($i=0; $i <= (count($strarr) - $k); $i++) { 
        $string = $strarr[$i];

        for ($j=1; $j < $k ; $j++) { 
            $string .= $strarr[$j+$i];
        }

        $total[$string] = strlen($string);

    }
    if (count($strarr) == 0 || $k > count($strarr) || $k <= 0) {
      return "";
    } else {
        return array_search(max($total), $total);
    }
   
}

print_r(longestConsec(["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"], 1));

?>