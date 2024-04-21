<?php
//https://www.codewars.com/kata/55685cd7ad70877c23000102/train/php
function makeNegative($number) {

    if ($number >= 0) {

        return -1 * $number;
    } else {

        return $number;
    }
}

echo makeNegative(-1);

