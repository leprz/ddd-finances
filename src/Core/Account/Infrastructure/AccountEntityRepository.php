<?php

declare(strict_types=1);

namespace Library\Finances\Core\Account\Infrastructure;

use Doctrine\ORM\EntityManagerInterface;
use Library\Finances\Core\Account\Application\AccountRepositoryInterface;
use Library\Finances\Core\Account\Domain\Account;
use Library\SharedKernel\Infrastructure\Persistence\QueryBuilderTrait;

/**
 * @package Library\Finances\Core\Account\Infrastructure
 */
class AccountEntityRepository implements AccountRepositoryInterface
{
    use QueryBuilderTrait;

    /**
     * @return string
     */
    protected static function entityClass(): string
    {
    }

    /**
     * @return \Library\Finances\Core\Account\Domain\Account
     */
    public function getById(): Account
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
