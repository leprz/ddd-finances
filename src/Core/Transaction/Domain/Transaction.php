<?php

declare(strict_types=1);

namespace Library\Finances\Core\Transaction\Domain;

use Library\Finances\Common\Shared\Domain\ValueObject\Date;
use Library\Finances\Common\Shared\Domain\ValueObject\DateTime;
use Library\Finances\Common\Shared\Domain\ValueObject\Money;
use Library\Finances\Core\Account\Domain\AccountId;

/**
 * @package Library\Finances\Core\Transaction\Domain
 */
class Transaction
{
    private function __construct(
        private TransactionId $transactionId,
        private AccountId $accountId,
        private string $description,
        private Money $amount,
        private Date $date
    ) {
    }

    public static function loss(
        TransactionId $transactionId,
        AccountId $accountId,
        string $title,
        Money $amount,
        Date $date
    ): self {
        return new self($transactionId, $accountId, $title, $amount->negative(), $date);
    }
}
