<?php 

// Kata link: https://www.codewars.com/kata/55908aad6620c066bc00002a/train/php

// Question: Check to see if a string has the same amount of 'x's and 'o's. The method must return a boolean and be case insensitive. 
// The string can contain any char.

// One-liners, you can use the substr_count function of php and add the boolean comparison which return true or false. 

function XO($s) {

    $lower = strtolower($s);
    return substr_count($lower, 'x') === substr_count($lower, 'o');

}

?>