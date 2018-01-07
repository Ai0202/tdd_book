<?php
declare(strict_types=1);

namespace Part1\Chapter9;

require_once 'Part1/Chapter9/Dollar.php';
require_once 'Part1/Chapter9/Franc.php';

abstract class Money
{
    /** @var int */
    protected $amount;

    /** @var string */
    protected $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

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
        return new Dollar($amount, 'USD');
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount, 'CHF');
    }

    public abstract function times(int $multiplier): Money;

    /**
     * @return string
     */
    public function currency(): string
    {
        return $this->currency;
    }
}
