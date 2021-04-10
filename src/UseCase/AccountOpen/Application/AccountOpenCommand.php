<?php

declare(strict_types=1);

namespace Library\Finances\UseCase\AccountOpen\Application;

use Library\Finances\Common\Shared\Domain\ValueObject\Currency;
use Library\Finances\Core\Account\Domain\AccountId;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;
use Library\Finances\UseCase\AccountOpen\Domain\AccountOpenDataInterface;

/**
 * @package Library\Finances\UseCase\AccountOpen\Application
 */
class AccountOpenCommand implements AccountOpenDataInterface
{
    public function getCurrency(): Currency
    {
        // TODO: Implement getCurrency() method.
    }

    public function getOwnerId(): AccountOwnerId
    {
        // TODO: Implement getOwnerId() method.
    }

    public function getId(): AccountId
    {
        // TODO: Implement getId() method.
    }
}
