<?php
declare(strict_types=1);

namespace Part1\Chapter9;

require_once 'Part1/Chapter9/Money.php';

class Franc extends Money
{

    /**
     * @param int $multiplier
     * @return Money
     */
    public function times(int $multiplier): Money
    {
        return Money::franc($this->amount * $multiplier);
    }
}
