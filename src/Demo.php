<?php

declare(strict_types=1);

namespace hanakivan\SwTesting;

class Demo {

    public static function isAngledTriangle(int $a, int $b, int $c): bool
    {
        return $c === ((int)($a**2 + $b**2)**(1/2));
    }
}