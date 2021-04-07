<?php

declare(strict_types=1);

namespace Library\Finances\Core\AccountOwner\Infrastructure;

use Doctrine\ORM\EntityManagerInterface;
use Library\Finances\Core\AccountOwner\Application\AccountOwnerRepositoryInterface;
use Library\Finances\Core\AccountOwner\Domain\AccountOwner;
use Library\SharedKernel\Infrastructure\Persistence\QueryBuilderTrait;

/**
 * @package Library\Finances\Core\AccountOwner\Infrastructure
 */
class AccountOwnerEntityRepository implements AccountOwnerRepositoryInterface
{
    use QueryBuilderTrait;

    /**
     * @return string
     */
    protected static function entityClass(): string
    {
    }

    /**
     * @return \Library\Finances\Core\AccountOwner\Domain\AccountOwner
     */
    public function getById(): AccountOwner
    {
    }

    /**
     * @param \Doctrine\ORM\EntityManagerInterface
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
    }

    /**
     * @return \Doctrine\ORM\EntityManagerInterface
     */
    protected function getEntityManager(): EntityManagerInterface
    {
    }
}
