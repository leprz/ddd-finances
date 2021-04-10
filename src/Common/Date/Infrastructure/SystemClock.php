<?php

declare(strict_types=1);

namespace Library\Finances\Common\Date\Infrastructure;

use Aeon\Calendar\Gregorian\TimeZone;
use DateTimeZone;
use Library\Finances\Common\Date\Application\ClockInterface;
use Library\Finances\Common\Date\Infrastructure\Adapter\DateAdapter;
use Library\Finances\Common\Date\Infrastructure\Adapter\DateTimeAdapter;
use Library\Finances\Common\Shared\Domain\ValueObject\Date;
use Library\Finances\Common\Shared\Domain\ValueObject\DateTime;

class SystemClock implements ClockInterface
{
    public function now(): DateTime
    {
        /** @noinspection PhpUnhandledExceptionInspection */
        return new DateTimeAdapter(
            \Aeon\Calendar\Gregorian\DateTime::fromString('now')
                ->toTimeZone(
                    TimeZone::fromDateTimeZone($this->timeZone())
                )
        );
    }

    public function today(): Date
    {
        /** @noinspection PhpUnhandledExceptionInspection */
        return new DateAdapter(
            \Aeon\Calendar\Gregorian\DateTime::fromString('now')
                ->toTimeZone(
                    TimeZone::fromDateTimeZone($this->timeZone())
                )
        );
    }

    public function timeZone(): DateTimeZone
    {
        return new DateTimeZone(DateTimeZone::UTC);
    }
}
