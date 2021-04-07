<?php

declare(strict_types=1);

namespace Library\Finances\Core\AccountOwner\Infrastructure;

use Library\Finances\Core\AccountOwner\Domain\AccountOwner;

/**
 * @package Library\Finances\Core\AccountOwner\Infrastructure
 */
class AccountOwnerProxy extends AccountOwner
{
    /**
     * @param \Library\Finances\Core\AccountOwner\Infrastructure\AccountOwnerEntity
     */
    public function __construct(AccountOwnerEntity $entity)
    {
    }

    /**
     * @param \Library\Finances\Core\AccountOwner\Infrastructure\AccountOwnerEntityMapper
     * @return \Library\Finances\Core\AccountOwner\Infrastructure\AccountOwnerEntity
     */
    public function getEntity(AccountOwnerEntityMapper $mapper): AccountOwnerEntity
    {
    }
}
