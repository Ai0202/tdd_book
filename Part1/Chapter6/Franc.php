<?php
declare(strict_types=1);

namespace Part1\Chapter6;

class Franc
{
    /** @var */
    private $amount;

    /**
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    /**
     * @param int $multiplier
     * @return Franc
     */
    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }

    /**
     * @param Franc $franc
     * @return bool
     */
    public function equals(Franc $franc): bool
    {
        return $this->amount === $franc->amount;
    }
}
