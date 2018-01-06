<?php
declare(strict_types=1);

namespace Part1\Chapter4;

require_once 'Part1/Chapter4/Dollar.php';

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testMultipication()
    {
        $five = new Dollar(5);

        $this->assertTrue((new Dollar(10))->equals($five->times(2)));
        $this->assertTrue((new Dollar(15))->equals($five->times(3)));
    }

    public function testEquality()
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}
