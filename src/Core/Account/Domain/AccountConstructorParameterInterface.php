<?php

declare(strict_types=1);

namespace Library\Finances\Core\Account\Domain;

use Library\Finances\Common\Shared\Domain\ValueObject\Currency;
use Library\Finances\Common\Shared\Domain\ValueObject\Money;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;

/**
 * @package Library\Finances\Core\Account\Domain
 */
interface AccountConstructorParameterInterface
{
    public function getId(): AccountId;

    public function getOwnerId(): AccountOwnerId;

    public function getBalance(): ?Money;

    public function getCurrency(): Currency;
}
