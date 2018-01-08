<?php
declare(strict_types=1);

namespace Part1\Chapter14;

interface Expression
{
    public function reduce(Bank $bank, string $to): Money;
}
