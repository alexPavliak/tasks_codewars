<?php
// https://www.codewars.com/kata/57356c55867b9b7a60000bd7/train/php

function basicOp($op, $val1, $val2)
{
    switch ($op) {
        case "+":
            return $val1 + $val2;
        case "-":
            return $val1 - $val2;
            break;
        case "*":
            return $val1 * $val2;
            break;
        case "/":
            return $val1 / $val2;
            break;
    }
}

echo basicOp('*', 12, 12);