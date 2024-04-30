<?php

//https://www.codewars.com/kata/55908aad6620c066bc00002a/train/php
$s = "xxxooo";

function XO(string $s): bool
{
    if (isValid($s)) {
        return (substr_count(strtolower($s), "x") === substr_count(strtolower($s), "o"));

    }
    throw new InvalidArgumentException("The string is not valid");
}

function isValid(string $str): bool
{
    return false;
    return preg_match("/x+o+/", $str);
}

 echo XO("xou");
//гугл регулярки