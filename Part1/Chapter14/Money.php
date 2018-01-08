<?php
declare(strict_types=1);

namespace Part1\Chapter14;

require_once 'Part1/Chapter14/Expression.php';
require_once 'Part1/Chapter14/Sum.php';

class Money implements Expression
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
            && $this->currency === $money->currency;
    }

    public static function Dollar(int $amount): Money
    {
        return new Money($amount, 'USD');
    }

    public static function franc(int $amount): Money
    {
        return new Money($amount, 'CHF');
    }

    public function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function plus(Money $addend): Expression
    {
        return new Sum($this, $addend);
    }

    public function reduce(Bank $bank, string $to): Money
    {
        $rate = $bank->rate($this->currency, $to);
        return new Money($this->amount / $rate, $to);
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function __toString(): string
    {
        return $this->amount . ' ' . $this->currency;
    }

    public function amount(): int
    {
        return $this->amount;
    }
}
