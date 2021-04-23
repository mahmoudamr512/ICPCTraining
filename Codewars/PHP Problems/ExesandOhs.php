<?php 

// Kata link: https://www.codewars.com/kata/55908aad6620c066bc00002a/train/php

// Question: Check to see if a string has the same amount of 'x's and 'o's. The method must return a boolean and be case insensitive. 
// The string can contain any char.

// Loop and just count. 

function XO($s) {

    $boolF = false;
    $x=0; $o = 0; 

    for ($i=0; $i < strlen($s); $i++) { 
        if ($s[$i] == 'x' || $s[$i] == 'X') {
            $x++;
        } else if ($s[$i] == 'o' || $s[$i] == 'O') {
            $o++;
        }
    }

    if ($x == $o) {
        return true;
    } else {
        return false; 
    }

}

?>