<?php

declare(strict_types=1);

namespace Library\Finances\Common\Date\Infrastructure;

use Library\Finances\Common\Date\Application\Builder\DateTimeBuilderInterface;
use Library\Finances\Common\Date\Infrastructure\Adapter\DateTimeAdapter;
use Library\Finances\Common\Shared\Domain\ValueObject\DateTime;

class DateTimeBuilder implements DateTimeBuilderInterface
{
    public static function fromString(string $date): DateTime
    {
        return DateTimeAdapter::fromString($date);
    }
}
