<?php
declare(strict_types=1);

namespace Part1\Chapter15;

class Pair
{
    /** @var string */
    private $from;

    /** @var string */
    private $to;

    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function equals(Pair $pair): bool
    {
        return $this->from === $pair->from && $this->to === $pair->to;
    }

    public function hashCode(): int
    {
        return 0;
    }
}
