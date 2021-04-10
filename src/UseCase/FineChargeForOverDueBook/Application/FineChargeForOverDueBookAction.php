<?php

declare(strict_types=1);

namespace Library\Finances\UseCase\FineChargeForOverDueBook\Application;

use Library\Finances\Core\Account\Application\AccountRepositoryInterface;
use Library\Finances\Core\Account\Domain\Account;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;
use Library\Finances\Core\Transaction\Application\TransactionPersistenceInterface;
use Library\Finances\Core\Transaction\Domain\Transaction;
use Library\Finances\Core\Transaction\Domain\TransactionId;
use Library\Finances\UseCase\FineChargeForOverDueBook\Domain\FineChargeForOverDueBookActionInterface;

/**
 * @package Library\Finances\UseCase\FineChargeForOverDueBook\Application
 */
class FineChargeForOverDueBookAction implements FineChargeForOverDueBookActionInterface
{
    public function __construct(
        private AccountRepositoryInterface $accountRepository,
        private TransactionPersistenceInterface $transactionPersistence
    ) {
    }

    public function getNextTransactionId(): TransactionId
    {
        return $this->transactionPersistence->generateNextId();
    }

    public function getOwnersAccount(AccountOwnerId $accountOwnerId): Account
    {
        return $this->accountRepository->getByOwnerId($accountOwnerId);
    }

    public function recordTransaction(Transaction $transaction): void
    {
        $this->transactionPersistence->add($transaction);
    }
}
