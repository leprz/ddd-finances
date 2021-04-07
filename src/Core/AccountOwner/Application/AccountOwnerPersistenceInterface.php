<?php

declare(strict_types=1);

namespace Library\Finances\Core\AccountOwner\Application;

use Library\Finances\Core\AccountOwner\Domain\AccountOwner;

/**
 * @package Library\Finances\Core\AccountOwner\Application
 */
interface AccountOwnerPersistenceInterface
{
    /**
     * @return void
     */
    public function flush(): void;

    /**
     * @param \Library\Finances\Core\AccountOwner\Domain\AccountOwner
     * @return void
     */
    public function save(AccountOwner $model): void;

    /**
     * @param \Library\Finances\Core\AccountOwner\Domain\AccountOwner
     * @return void
     */
    public function add(AccountOwner $model): void;
}
