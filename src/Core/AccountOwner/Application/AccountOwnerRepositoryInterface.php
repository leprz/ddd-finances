<?php

declare(strict_types=1);

namespace Library\Finances\Core\AccountOwner\Application;

use Library\Finances\Core\AccountOwner\Domain\AccountOwner;

/**
 * @package Library\Finances\Core\AccountOwner\Application
 */
interface AccountOwnerRepositoryInterface
{
    /**
     * @return \Library\Finances\Core\AccountOwner\Domain\AccountOwner
     */
    public function getById(): AccountOwner;
}
