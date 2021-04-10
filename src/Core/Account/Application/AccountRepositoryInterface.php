<?php

declare(strict_types=1);

namespace Library\Finances\Core\Account\Application;

use Library\Finances\Core\Account\Domain\Account;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;

/**
 * @package Library\Finances\Core\Account\Application
 */
interface AccountRepositoryInterface
{
    /**
     * @return \Library\Finances\Core\Account\Domain\Account
     */
    public function getById(): Account;

    public function getByOwnerId(AccountOwnerId $accountOwnerId): Account;
}
