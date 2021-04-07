<?php

declare(strict_types=1);

namespace Library\Finances\Core\Account\Infrastructure;

use Library\Finances\Core\Account\Domain\Account;

/**
 * @package Library\Finances\Core\Account\Infrastructure
 */
class AccountProxy extends Account
{
    /**
     * @param \Library\Finances\Core\Account\Infrastructure\AccountEntity
     */
    public function __construct(AccountEntity $entity)
    {
    }

    /**
     * @param \Library\Finances\Core\Account\Infrastructure\AccountEntityMapper
     * @return \Library\Finances\Core\Account\Infrastructure\AccountEntity
     */
    public function getEntity(AccountEntityMapper $mapper): AccountEntity
    {
    }
}
