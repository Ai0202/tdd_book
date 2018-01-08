<?php
declare(strict_types=1);

namespace Part1\Chapter13;

require_once 'Part1/Chapter13/Money.php';

class Bank
{
    public function reduce(Expression $source, string $to): Money
    {
        return $source->reduce($to);
    }
}
