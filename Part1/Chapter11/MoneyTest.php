<?php
declare(strict_types=1);

namespace Part1\Chapter11;

require_once 'Part1/Chapter11/Money.php';

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{
    public function testMultipication()
    {
        $five = Money::Dollar(5);

        $this->assertTrue(Money::dollar(10)->equals($five->times(2)));
        $this->assertTrue(Money::dollar(15)->equals($five->times(3)));
    }

    public function testEquality()
    {
        $this->assertTrue(Money::dollar(5)->equals(Money::dollar(5)));
        $this->assertFalse(Money::dollar(5)->equals(Money::dollar(6)));

        $this->assertFalse(Money::dollar(5)->equals(Money::franc(5)));
    }

    public function testCurrency()
    {
        $this->assertSame('USD', Money::dollar(1)->currency());
        $this->assertSame('CHF', Money::franc(1)->currency());
    }
}
