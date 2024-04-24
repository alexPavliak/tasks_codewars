<?php
//https://www.codewars.com/kata/57eae20f5500ad98e50002c5/train/php

function no_space(string $s): string {
    $clearString = trim(str_replace(" ","",$s));
    return $clearString;
}
