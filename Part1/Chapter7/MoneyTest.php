<?php
declare(strict_types=1);

namespace Part1\Chapter7;

require_once 'Part1/Chapter7/Dollar.php';
require_once 'Part1/Chapter7/Franc.php';

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testMultipication()
    {
        $five = new Dollar(5);

        $this->assertTrue((new Dollar(10))->equals($five->times(2)));
        $this->assertTrue((new Dollar(15))->equals($five->times(3)));
    }

    public function testFrancMultipication()
    {
        $five = new Franc(5);

        $this->assertTrue((new Franc(10))->equals($five->times(2)));
        $this->assertTrue((new Franc(15))->equals($five->times(3)));
    }

    public function testEquality()
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));

        $this->assertTrue((new Franc(5))->equals(new Franc(5)));
        $this->assertFalse((new Franc(5))->equals(new Franc(6)));

        $this->assertFalse((new Dollar(5))->equals(new Franc(5)));
    }
}
