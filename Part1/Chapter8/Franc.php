<?php
declare(strict_types=1);

namespace Part1\Chapter8;

require_once 'Part1/Chapter8/Money.php';

class Franc extends Money
{
    /**
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param int $multiplier
     * @return Money
     */
    public function times(int $multiplier): Money
    {
        return new Franc($this->amount * $multiplier);
    }
}
