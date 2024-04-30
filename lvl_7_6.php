<?php
// https://www.codewars.com/kata/57cebe1dc6fdc20c57000ac9/train/php
//Simple, given a string of words, return the length of the shortest word(s).
//
//String will never be empty and you do not need to account for different data types.

$str = "turns out random an test cases are easier than writing out basic ones";
$strMapped =[5,3,6,4,5,3,6,4,7,3,5,4];
function findShort( string $str): int
{
    $words = explode(" ", $str);
    $lengthsMapped = array_map(function ( string $word) :int{
        return strlen($word);
    }, $words);
    return  getTheMin($lengthsMapped);
}
function getTheMin( array $numbers ) :int
{
    $min = $numbers[0];
    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] < $min){
            $min = $numbers[$i];
        }
    }
    return $min;
}
print_r(findShort($str));

//разбить строку на массив слов
//замапить массив на массив "длин" слов 0-5 1-3 2-6
//мапить?
//