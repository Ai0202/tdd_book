<?php
declare(strict_types=1);

namespace Part1\Chapter8;

require_once 'Part1/Chapter8/Dollar.php';
require_once 'Part1/Chapter8/Franc.php';

abstract class Money
{
    /** @var int */
    protected $amount;

    /**
     * @param Money $money
     * @return bool
     */
    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount
            && get_class($this) === get_class($money);
    }

    public static function Dollar(int $amount): Money
    {
        return new Dollar($amount);
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount);
    }

    public abstract function times(int $multiplier): Money;
}
