<?php

declare(strict_types=1);

namespace Library\Finances\Common\Domain\ValueObject;

class TimePeriod
{
    public function __construct(int $days, int $hours, int $minutes)
    {
    }

    public static function fromString(string $timePeriod): self
    {
        [$days, $hours, $minutes] = explode(':', $timePeriod);
        return new self($days, $hours, $minutes);
    }
}
