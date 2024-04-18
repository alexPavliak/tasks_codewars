<?php declare(strict_types=1);
//https://www.codewars.com/kata/546e2562b03326a88e000020
function square_digits(int $num): int
{
    $arr = array_map(
        function ($digit) {
            return $digit * $digit;
        }, str_split(strval($num))
    );
    $str =  implode('', $arr);
   return intval($str);
}

echo square_digits(715);


//232 => 494
//715 => 49125
// сделать из числа $num строку $str
//$str на массив строк
//строку привести к числу и возвести в 2.
//склеить массив чисел в строку





