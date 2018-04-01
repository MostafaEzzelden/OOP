<?php

class Math
{
    public static function add(...$args)
    {
        return array_sum($args);
    }
}


echo Math::add(1, 2, 3, 4, 5);
