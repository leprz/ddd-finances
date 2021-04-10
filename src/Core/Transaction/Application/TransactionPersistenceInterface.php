<?php

declare(strict_types=1);

namespace Library\Finances\Core\Transaction\Application;

use Library\Finances\Core\Transaction\Domain\Transaction;
use Library\Finances\Core\Transaction\Domain\TransactionId;

/**
 * @package Library\Finances\Core\Transaction\Application
 */
interface TransactionPersistenceInterface
{
    /**
     * @return void
     */
    public function flush(): void;

    /**
     * @param \Library\Finances\Core\Transaction\Domain\Transaction
     * @return void
     */
    public function save(Transaction $model): void;

    /**
     * @param \Library\Finances\Core\Transaction\Domain\Transaction
     * @return void
     */
    public function add(Transaction $model): void;

    public function generateNextId(): TransactionId;
}
