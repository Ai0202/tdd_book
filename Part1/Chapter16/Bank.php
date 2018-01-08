<?php
declare(strict_types=1);

namespace Part1\Chapter16;

require_once 'Part1/Chapter16/Money.php';
require_once 'Part1/Chapter16/Pair.php';

class Bank
{
    /** @var array|int[] */
    private $rates;

    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, string $to, int $rate)
    {
        $this->rates[(new Pair($from, $to))->hashCode()] = $rate;
    }

    public function rate(string $from, string $to)
    {
        if ($from === $to) return 1;

        return $this->rates[(new Pair($from, $to))->hashCode()];
    }
}
