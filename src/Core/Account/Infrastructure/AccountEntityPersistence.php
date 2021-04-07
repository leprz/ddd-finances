<?php

declare(strict_types=1);

namespace Library\Finances\Core\Account\Infrastructure;

use Library\Finances\Core\Account\Application\AccountPersistenceInterface;
use Library\Finances\Core\Account\Domain\Account;

/**
 * @package Library\Finances\Core\Account\Infrastructure
 */
class AccountEntityPersistence implements AccountPersistenceInterface
{
    /**
     * @return void
     */
    public function flush(): void
    {
    }

    /**
     * @param \Library\Finances\Core\Account\Domain\Account
     * @return void
     */
    public function save(Account $model): void
    {
    }

    /**
     * @param \Library\Finances\Core\Account\Domain\Account
     * @return void
     */
    public function add(Account $model): void
    {
    }
}
