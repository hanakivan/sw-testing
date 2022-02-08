<?php

declare(strict_types=1);

namespace hanakivan\SwTesting;
use PHPUnit\Framework\TestCase;

final class DemoTest extends TestCase{

    public function testIsAngledTriangle()
    {
        $this->assertTrue(Demo::isAngledTriangle(3, 4, 5));
    }
}