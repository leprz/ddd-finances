<?php

declare(strict_types=1);

namespace Library\Finances\Core\AccountOwner\Infrastructure;

use Doctrine\ORM\EntityManagerInterface;
use Library\Finances\Common\Shared\Infrastructure\Persistence\EntityMapperTrait;
use Library\Finances\Core\AccountOwner\Domain\AccountOwner;

/**
 * @package Library\Finances\Core\AccountOwner\Infrastructure
 */
class AccountOwnerEntityMapper
{
    use EntityMapperTrait;

    /**
     * @param \Doctrine\ORM\EntityManagerInterface
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
    }

    /**
     * @param \Library\Finances\Core\AccountOwner\Infrastructure\AccountOwnerEntity
     * @param \Library\Finances\Core\AccountOwner\Domain\AccountOwner
     * @return \Library\Finances\Core\AccountOwner\Infrastructure\AccountOwnerEntity
     */
    public function mapToExistingEntity(AccountOwnerEntity $entity, AccountOwner $model): AccountOwnerEntity
    {
    }

    /**
     * @param \Library\Finances\Core\AccountOwner\Domain\AccountOwner
     * @return \Library\Finances\Core\AccountOwner\Infrastructure\AccountOwnerEntity
     */
    public function mapToNewEntity(AccountOwner $cart): AccountOwnerEntity
    {
    }
}
