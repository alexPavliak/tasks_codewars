<?php
//https://www.codewars.com/kata/554b4ac871d6813a03000035

//highAndLow("1 2 3 4 5");  // return "5 1"
//highAndLow("1 2 -3 4 5"); // return "5 -3"
$nums = highAndLow("1 9 3 4 -5"); // return "9 -5"

function highAndLow($numbers)
{
        return "";
}


function low( array $value)  {
    return min($value);
}

echo low((array)$nums);
