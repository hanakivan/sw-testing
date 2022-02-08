<?php

declare(strict_types=1);

namespace hanakivan\SwTesting;

class Rectangle {

    public static function isRectangle(float $a, float $b): bool
    {
        return $a !== $b;
    }
}