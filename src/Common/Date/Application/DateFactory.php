<?php

declare(strict_types=1);

namespace Library\Finances\Common\Date\Application;

use Library\Finances\Common\Date\Application\Builder\AdapterNotInitializedException;
use Library\Finances\Common\Date\Application\Builder\DateBuilderInterface;
use Library\Finances\Common\Shared\Domain\ValueObject\Date;

class DateFactory
{
    private static ?DateBuilderInterface $adapter = null;

    public static function fromString(string $date): Date
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

    private static function adapter(): DateBuilderInterface
    {
        if (self::$adapter === null) {
            throw AdapterNotInitializedException::fromClassName(self::class);
        }

        return self::$adapter;
    }

    protected static function setAdapter(DateBuilderInterface $adapter): void
    {
        self::$adapter = $adapter;
    }
}
