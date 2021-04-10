<?php

declare(strict_types=1);

namespace Library\Finances\Core\Transaction\Infrastructure;

use Doctrine\ORM\EntityManagerInterface;
use Library\Finances\Core\Transaction\Application\TransactionRepositoryInterface;
use Library\Finances\Core\Transaction\Domain\Transaction;
use Library\SharedKernel\Infrastructure\Persistence\QueryBuilderTrait;

/**
 * @package Library\Finances\Core\Transaction\Infrastructure
 */
class TransactionEntityRepository implements TransactionRepositoryInterface
{
    use QueryBuilderTrait;

    /**
     * @return string
     */
    protected static function entityClass(): string
    {
    }

    /**
     * @return \Library\Finances\Core\Transaction\Domain\Transaction
     */
    public function getById(): Transaction
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
