<?php

declare(strict_types=1);

namespace Library\Finances\Common\Date\Application;

use Library\Finances\Common\Shared\Domain\ValueObject\DateTime;

interface ClockInterface
{
    public function now(): DateTime;
}
