<?php

declare(strict_types=1);

namespace Library\Finances\Common\Shared\Domain\ValueObject;

abstract class DateTime
{
    abstract public function __toString(): string;

    abstract public function toDate(): Date;
}
