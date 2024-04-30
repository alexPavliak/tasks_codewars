<?php
//https://www.codewars.com/kata/54ff3102c1bad923760001f3/train/php


function getCount(string $str): int
{
    $vowelsCount = 0;
    foreach (str_split($str) as $letter) {
        if (strpos(" aeoui", $letter)) {
            $vowelsCount++;
        }
    }

    return $vowelsCount;
}
var_dump(getCount("aaaouefew"));