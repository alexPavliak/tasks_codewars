<?php
//https://www.codewars.com/kata/554b4ac871d6813a03000035

//highAndLow("1 2 3 4 5");  // return "5 1"
//highAndLow("1 2 -3 4 5"); // return "5 -3"
$nums = ("1 9 3 4 -5"); // return "9 -5"


function highAndLow($numbers)
{
    $arr = explode(' ', $numbers);
    $max = max($arr);
    $min = min($arr);
    return $max . ' ' . $min;



function highAndLow($numbers)
{
    #Splitting the string into array on spaces
    $arr = explode(' ',$numbers);

    #Sorting the array - the smallest item will be first and the biggest will be last
    sort($arr);

    #Returning the last item in the array (biggest) followed by a space and the first item in the array (smallest)
    return $arr[count($arr)-1]." ".$arr[0];
}