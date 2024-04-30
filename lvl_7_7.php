<?php
//https://www.codewars.com/kata/56747fd5cb988479af000028/train/php


function getMiddle(string $text) :string {
    $len = strlen($text);
    $rounded = floor($len/2);
    if ( $len %2 === 0){
        return $text[$len/2 -1] . $text[$len/2 ];
    }else {
         return $text[(int)$rounded];

   }
}
echo getMiddle("mother");