<?php

declare(strict_types=1);

namespace Library\Finances\Common\Shared\Domain\ValueObject;

use Library\SharedKernel\Infrastructure\Money\CurrencyTrait;

class Currency
{
    use CurrencyTrait;
}
