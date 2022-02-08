<?php

declare(strict_types=1);

namespace hanakivan\SwTesting;
use PHPUnit\Framework\TestCase;

final class RectangleTest extends TestCase{

    public function testIsRectangle()
    {
        $this->assertTrue(Rectangle::isRectangle(3, 4));
    }

    public function testIsNotRectangle()
    {
        $this->assertFalse(Rectangle::isRectangle(3, 3));
    }
}