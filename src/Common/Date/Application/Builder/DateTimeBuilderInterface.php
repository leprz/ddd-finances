<?php

declare(strict_types=1);

namespace Library\Finances\Common\Date\Application\Builder;

use Library\Finances\Common\Shared\Domain\ValueObject\DateTime;

interface DateTimeBuilderInterface
{
    /**
     * @param string $date
     * @return \Library\Finances\Common\Shared\Domain\ValueObject\DateTime
     * @throws \InvalidArgumentException
     */
    public static function fromString(string $date): DateTime;
}
