<?php
declare(strict_types=1);

namespace Part1\Chapter13;

interface Expression
{
    public function reduce(string $to): Money;
}
