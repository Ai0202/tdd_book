<?php
declare(strict_types=1);

namespace Part1\Chapter3;

require_once 'Part1/Chapter3/Dollar.php';

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);

        $product = $five->times(2);
        $this->assertSame(10, $product->amount);

        $product = $five->times(3);
        $this->assertSame(15, $product->amount);
    }

    public function testEquality()
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}
