<?php

declare(strict_types=1);

namespace Library\Finances\Common\AccountDebit\Domain;

use Library\Finances\Core\Transaction\Domain\TransactionId;

interface AccountDebitActionInterface
{
    public function getNextTransactionId(): TransactionId;
}
