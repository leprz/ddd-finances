<?php

declare(strict_types=1);

namespace Library\Finances\Common\Date\Infrastructure\Adapter;

use Aeon\Calendar\Gregorian\DateTime;
use Aeon\Calendar\Gregorian\Time;
use InvalidArgumentException;
use Library\Finances\Common\Date\Application\Builder\DateBuilderInterface;
use Library\Finances\Common\Shared\Domain\ValueObject\Date;

class DateAdapter extends Date implements DateBuilderInterface
{
    /**
     * @var \Aeon\Calendar\Gregorian\DateTime
     */
    private DateTime $date;

    public function __construct(DateTime $dateTime)
    {
        /** @noinspection PhpUnhandledExceptionInspection */
        $this->date = $dateTime->setTime(new Time(0, 0, 0));
    }

    public function __toString(): string
    {
        return $this->date->toISO8601();
    }

    public function format(string $format): string
    {
        return $this->date->format($format);
    }

    public static function fromDateTime(\Library\Finances\Common\Shared\Domain\ValueObject\DateTime $dateTime): Date
    {
        try {
            return new self(DateTime::fromString((string)$dateTime));
        } catch (\Aeon\Calendar\Exception\InvalidArgumentException $e) {
            throw new \InvalidArgumentException($e->getMessage(), previous: $e);
        }
    }

    public function toDateTime(): DateTimeAdapter
    {
        return new DateTimeAdapter($this->getDate());
    }

    public function daysUntil(Date $date): int
    {
        return $this->date->until($date->getDate())->distance()->inDays();
    }

    protected function getDate(): DateTime
    {
        return $this->date;
    }

    /**
     * @param string $date
     * @return \Library\Finances\Common\Shared\Domain\ValueObject\Date
     */
    public static function fromString(string $date): Date
    {
        try {
            return new self(DateTime::fromString($date));
        } catch (\Aeon\Calendar\Exception\InvalidArgumentException $e) {
            throw new InvalidArgumentException($e->getMessage());
        }
    }
}
