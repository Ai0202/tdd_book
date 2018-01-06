<?php
declare(strict_types=1);

namespace Part1\Chapter1;

require_once 'Part1/Chapter1/Dollar.php';

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $five->times(2);

        $this->assertSame(10, $five->amount);
    }
}
