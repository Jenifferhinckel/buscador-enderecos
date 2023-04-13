<?php

namespace App\Enum;

abstract class Enum
{
    public static function getConstants($class)
    {
        $reflectionClass = new \ReflectionClass($class);
        return $reflectionClass->getConstants();
    }
}