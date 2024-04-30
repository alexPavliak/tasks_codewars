<?php

//https://www.codewars.com/kata/5667e8f4e3f572a8f2000039/train/php
function accum(string $s): string
{
    $res = [];
    for ($i = 0; $i < strlen($s); $i++) {
        $repeated = str_repeat($s[$i], $i + 1);
        $res[] = ucfirst(strtolower($repeated));
        if ($i < strlen($s) -1){
            $res[] = "-";
        }

    }

    return implode($res);
}

function test(string $s): void
{
    for ($i = 0; $i < strlen($s); $i++) {
        echo $s[$i] . " ";
    }
}

echo accum("ZpglnRxqenU");
//Z-Pp-Ggg-Llll-Nnnnn-Rrrrrr-Xxxxxxx-Qqqqqqqq-Eeeeeeeee-Nnnnnnnnnn-Uuuuuuuuuuu"