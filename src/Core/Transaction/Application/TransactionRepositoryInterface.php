<?php

declare(strict_types=1);

namespace Library\Finances\Core\Transaction\Application;

use Library\Finances\Core\Transaction\Domain\Transaction;

/**
 * @package Library\Finances\Core\Transaction\Application
 */
interface TransactionRepositoryInterface
{
    /**
     * @return \Library\Finances\Core\Transaction\Domain\Transaction
     */
    public function getById(): Transaction;
}
