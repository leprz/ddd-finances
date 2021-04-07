<?php

declare(strict_types=1);

namespace Library\Finances\Core\Fine\Infrastructure;

use Doctrine\ORM\EntityManagerInterface;
use Library\Finances\Common\Infrastructure\Persistence\EntityMapperTrait;
use Library\Finances\Core\Fine\Domain\Fine;

/**
 * @package Library\Finances\Core\Fine\Infrastructure
 */
class FineEntityMapper
{
    use EntityMapperTrait;

    /**
     * @param \Doctrine\ORM\EntityManagerInterface
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
    }

    /**
     * @param \Library\Finances\Core\Fine\Infrastructure\FineEntity
     * @param \Library\Finances\Core\Fine\Domain\Fine
     * @return \Library\Finances\Core\Fine\Infrastructure\FineEntity
     */
    public function mapToExistingEntity(FineEntity $entity, Fine $model): FineEntity
    {
    }

    /**
     * @param \Library\Finances\Core\Fine\Domain\Fine
     * @return \Library\Finances\Core\Fine\Infrastructure\FineEntity
     */
    public function mapToNewEntity(Fine $cart): FineEntity
    {
    }
}
