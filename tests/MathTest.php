<?php

declare(strict_types=1);

namespace Tests;

use App\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testDouble(): void
    {
        $double = Math::double(6);
        self::assertEquals(12, $double);
    }
}
