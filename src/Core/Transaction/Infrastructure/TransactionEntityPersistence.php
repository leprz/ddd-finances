<?php

declare(strict_types=1);

namespace Library\Finances\Core\Transaction\Infrastructure;

use Library\Finances\Core\Transaction\Application\TransactionPersistenceInterface;
use Library\Finances\Core\Transaction\Domain\Transaction;
use Library\Finances\Core\Transaction\Domain\TransactionId;
use Ramsey\Uuid\Uuid;

/**
 * @package Library\Finances\Core\Transaction\Infrastructure
 */
class TransactionEntityPersistence implements TransactionPersistenceInterface
{
    /**
     * @return void
     */
    public function flush(): void
    {
    }

    /**
     * @param \Library\Finances\Core\Transaction\Domain\Transaction
     * @return void
     */
    public function save(Transaction $model): void
    {
    }

    /**
     * @param \Library\Finances\Core\Transaction\Domain\Transaction
     * @return void
     */
    public function add(Transaction $model): void
    {
    }

    public function generateNextId(): TransactionId
    {
        return TransactionId::fromString(Uuid::uuid4()->toString());
    }
}
