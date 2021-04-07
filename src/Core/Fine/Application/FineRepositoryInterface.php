<?php

declare(strict_types=1);

namespace Library\Finances\Core\Fine\Application;

use Library\Finances\Core\Fine\Domain\Fine;

/**
 * @package Library\Finances\Core\Fine\Application
 */
interface FineRepositoryInterface
{
    /**
     * @return \Library\Finances\Core\Fine\Domain\Fine
     */
    public function getById(): Fine;
}
