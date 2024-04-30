<?php

class Repeater
{
    public function __construct(public string $str, public  int $times)
    {
    }
    public function __toString(): string
    {
       return  $this->str . $this->times;
    }
    public function repeat():string
    {
        return str_repeat($this->str, $this->times);
    }
}

$repeater1 = new Repeater("abc", 3);
$repeater2 = new Repeater("def", 4);
//echo ($repeater1);
//echo ($repeater2);
echo $repeater1->repeat();