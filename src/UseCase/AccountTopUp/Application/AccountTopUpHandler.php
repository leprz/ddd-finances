<?php

declare(strict_types=1);

namespace Library\Finances\UseCase\AccountTopUp\Application;

/**
 * @package Library\Finances\UseCase\AccountTopUp\Application
 */
class AccountTopUpHandler
{
    /**
     * @param \Library\Finances\UseCase\AccountTopUp\Application\AccountTopUpCommand
     * @return void
     */
    public function __invoke(AccountTopUpCommand $command): void
    {
    }
}
