<?php
declare(strict_types=1);

namespace Library\Finances\Common\Date\Infrastructure;

use Library\Finances\Common\Date\Application\Builder\DateBuilderInterface;
use Library\Finances\Common\Date\Infrastructure\Adapter\DateAdapter;
use Library\Finances\Common\Shared\Domain\ValueObject\Date;

class DateBuilder implements DateBuilderInterface
{
    public static function fromString(string $date): Date
    {
        return DateAdapter::fromString($date);
    }
}
