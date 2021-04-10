<?php

declare(strict_types=1);

namespace Library\Finances\Core\Fine\Infrastructure;

use Library\Finances\Core\Fine\Domain\Fine;

/**
 * @package Library\Finances\Core\Fine\Infrastructure
 */
class FineProxy extends Fine
{
    /**
     * @param \Library\Finances\Core\Fine\Infrastructure\FineEntity
     */
    public function __construct(private FineEntity $entity)
    {
        parent::__construct($this->entity);
    }

    /**
     * @param \Library\Finances\Core\Fine\Infrastructure\FineEntityMapper
     * @return \Library\Finances\Core\Fine\Infrastructure\FineEntity
     */
    public function getEntity(FineEntityMapper $mapper): FineEntity
    {
        return $mapper->mapToExistingEntity($this->entity, $this);
    }
}
