<?php
declare(strict_types=1);

namespace Part1\Chapter16;

interface Expression
{
    public function plus(Expression $addend): Expression;
    public function reduce(Bank $bank, string $to): Money;
    public function times(int $multiplier): Expression;
}
