<?php

declare(strict_types=1);

namespace Library\Finances\Common\Date\Application;

use InvalidArgumentException;
use Library\Finances\Common\Date\Application\Builder\AdapterNotInitializedException;
use Library\Finances\Common\Date\Application\Builder\DateTimeBuilderInterface;
use Library\Finances\Common\Shared\Domain\ValueObject\DateTime;

class DateTimeFactory
{
    private static ?DateTimeBuilderInterface $adapter = null;

    public static function fromString(string $date): DateTime
    {
        self::assertHasNoDynamicDates($date);

        return self::adapter()::fromString($date);
    }

    private static function assertHasNoDynamicDates(string $date): void
    {
        if ($date === 'now') {
            throw new InvalidArgumentException(
                sprintf(
                    'Can not use dynamically created date. Please use %s instead of [%s]',
                    ClockInterface::class,
                    $date
                )
            );
        }
    }

    private static function adapter(): DateTimeBuilderInterface
    {
        if (self::$adapter === null) {
            throw AdapterNotInitializedException::fromClassName(self::class);
        }

        return self::$adapter;
    }

    protected static function setAdapter(DateTimeBuilderInterface $adapter): void
    {
        self::$adapter = $adapter;
    }
}
