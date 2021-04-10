<?php

declare(strict_types=1);

namespace Library\Finances\Core\Account\Infrastructure;

use Doctrine\ORM\EntityManagerInterface;
use Library\Finances\Common\Shared\Infrastructure\Persistence\EntityMapperTrait;
use Library\Finances\Core\Account\Domain\Account;

/**
 * @package Library\Finances\Core\Account\Infrastructure
 */
class AccountEntityMapper
{
    use EntityMapperTrait;

    /**
     * @param \Doctrine\ORM\EntityManagerInterface
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
    }

    /**
     * @param \Library\Finances\Core\Account\Infrastructure\AccountEntity
     * @param \Library\Finances\Core\Account\Domain\Account
     * @return \Library\Finances\Core\Account\Infrastructure\AccountEntity
     */
    public function mapToExistingEntity(AccountEntity $entity, Account $model): AccountEntity
    {
    }

    /**
     * @param \Library\Finances\Core\Account\Domain\Account
     * @return \Library\Finances\Core\Account\Infrastructure\AccountEntity
     */
    public function mapToNewEntity(Account $cart): AccountEntity
    {
    }
}
