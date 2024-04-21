//https://www.codewars.com/kata/56bc28ad5bdaeb48760009b0/train/php
<?php
function remove_char(string $s): string {

        $trimmed = mb_substr($s, 1, -1);
        return $trimmed;

}