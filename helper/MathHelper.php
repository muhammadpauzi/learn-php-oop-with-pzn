<?php

namespace Helper;

class MathHelper
{
    static public string $name = "MathHelper";

    static public function sum(int ...$numbers)
    {
        return array_sum($numbers);
    }
}
