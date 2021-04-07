<?php

declare(strict_types=1);

namespace Library\Finances\Core\Fine\Infrastructure;

use Doctrine\ORM\EntityManagerInterface;
use Library\Finances\Core\Fine\Application\FineRepositoryInterface;
use Library\Finances\Core\Fine\Domain\Fine;
use Library\SharedKernel\Infrastructure\Persistence\QueryBuilderTrait;

/**
 * @package Library\Finances\Core\Fine\Infrastructure
 */
class FineEntityRepository implements FineRepositoryInterface
{
    use QueryBuilderTrait;

    /**
     * @return string
     */
    protected static function entityClass(): string
    {
    }

    /**
     * @return \Library\Finances\Core\Fine\Domain\Fine
     */
    public function getById(): Fine
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
