<?php

declare(strict_types=1);

namespace Library\Finances\Core\Account\Application;

use Library\Finances\Core\Account\Domain\Account;

/**
 * @package Library\Finances\Core\Account\Application
 */
interface AccountRepositoryInterface
{
    /**
     * @return \Library\Finances\Core\Account\Domain\Account
     */
    public function getById(): Account;
}
