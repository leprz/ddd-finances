<?php

declare(strict_types=1);

namespace Library\Finances\Common\Shared\Domain\ValueObject;

class TimePeriod
{
    public function __construct(private int $days, private int $hours, private int $minutes)
    {
    }

    public static function fromString(string $timePeriod): self
    {
        [$days, $hours, $minutes] = explode(':', $timePeriod);
        return new self((int)$days, (int)$hours, (int)$minutes);
    }

    public function getDays(): int
    {
        return $this->days;
    }
}
