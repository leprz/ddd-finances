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
    public function __construct(FineEntity $entity)
    {
    }

    /**
     * @param \Library\Finances\Core\Fine\Infrastructure\FineEntityMapper
     * @return \Library\Finances\Core\Fine\Infrastructure\FineEntity
     */
    public function getEntity(FineEntityMapper $mapper): FineEntity
    {
    }
}
