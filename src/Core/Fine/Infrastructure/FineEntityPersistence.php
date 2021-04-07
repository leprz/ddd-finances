<?php

declare(strict_types=1);

namespace Library\Finances\Core\Fine\Infrastructure;

use Library\Finances\Core\Fine\Application\FinePersistenceInterface;
use Library\Finances\Core\Fine\Domain\Fine;

/**
 * @package Library\Finances\Core\Fine\Infrastructure
 */
class FineEntityPersistence implements FinePersistenceInterface
{
    /**
     * @return void
     */
    public function flush(): void
    {
    }

    /**
     * @param \Library\Finances\Core\Fine\Domain\Fine
     * @return void
     */
    public function save(Fine $model): void
    {
    }

    /**
     * @param \Library\Finances\Core\Fine\Domain\Fine
     * @return void
     */
    public function add(Fine $model): void
    {
    }
}
