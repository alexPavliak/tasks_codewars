<?php
//https://www.codewars.com/kata/52fba66badcd10859f00097e

function disemvowel($string) {

    $vowels = array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U');
    return str_replace($vowels, '', $string);

}