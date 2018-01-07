<?php
declare(strict_types=1);

namespace Part1\Chapter8;

require_once 'Part1/Chapter8/Money.php';

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testMultipication()
    {
        $five = Money::Dollar(5);

        $this->assertTrue(Money::Dollar(10)->equals($five->times(2)));
        $this->assertTrue(Money::Dollar(15)->equals($five->times(3)));
    }

    public function testFrancMultipication()
    {
        $five = Money::Franc(5);

        $this->assertTrue(Money::Franc(10)->equals($five->times(2)));
        $this->assertTrue(Money::Franc(15)->equals($five->times(3)));
    }

    public function testEquality()
    {
        $this->assertTrue(Money::Dollar(5)->equals(new Dollar(5)));
        $this->assertFalse(Money::Dollar(5)->equals(new Dollar(6)));

        $this->assertTrue(Money::Franc(5)->equals(new Franc(5)));
        $this->assertFalse(Money::Franc(5)->equals(new Franc(6)));

        $this->assertFalse(Money::Dollar(5)->equals(Money::Franc(5)));
    }
}
