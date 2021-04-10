<?php

declare(strict_types=1);

namespace Library\Finances\UseCase\FineChargeForOverDueBook\Domain;

use Library\Finances\Common\AccountDebit\Domain\AccountDebitActionInterface;
use Library\Finances\Core\Account\Domain\Account;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;
use Library\Finances\Core\Transaction\Domain\Transaction;

/**
 * @package Library\Finances\UseCase\FineChargeForOverDueBook\Domain
 */
interface FineChargeForOverDueBookActionInterface extends AccountDebitActionInterface
{
    public function getOwnersAccount(AccountOwnerId $accountOwnerId): Account;

    public function recordTransaction(Transaction $transaction): void;
}
