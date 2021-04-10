<?php

declare(strict_types=1);

namespace Library\Finances\Core\Transaction\Infrastructure;

use Doctrine\ORM\EntityManagerInterface;
use Library\Finances\Common\Shared\Infrastructure\Persistence\EntityMapperTrait;
use Library\Finances\Core\Transaction\Domain\Transaction;

/**
 * @package Library\Finances\Core\Transaction\Infrastructure
 */
class TransactionEntityMapper
{
    use EntityMapperTrait;

    /**
     * @param \Doctrine\ORM\EntityManagerInterface
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
    }

    /**
     * @param \Library\Finances\Core\Transaction\Infrastructure\TransactionEntity
     * @param \Library\Finances\Core\Transaction\Domain\Transaction
     * @return \Library\Finances\Core\Transaction\Infrastructure\TransactionEntity
     */
    public function mapToExistingEntity(TransactionEntity $entity, Transaction $model): TransactionEntity
    {
    }

    /**
     * @param \Library\Finances\Core\Transaction\Domain\Transaction
     * @return \Library\Finances\Core\Transaction\Infrastructure\TransactionEntity
     */
    public function mapToNewEntity(Transaction $cart): TransactionEntity
    {
    }
}
