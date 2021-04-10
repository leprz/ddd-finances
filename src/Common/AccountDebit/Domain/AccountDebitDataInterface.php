<?php

declare(strict_types=1);

namespace Library\Finances\Common\AccountDebit\Domain;

use Library\Finances\Common\Shared\Domain\ValueObject\Date;
use Library\Finances\Common\Shared\Domain\ValueObject\Money;

interface AccountDebitDataInterface
{
    public function getTransactionDescription(): string;

    public function getDebitValue(): Money;

    public function getDate(): Date;
}
