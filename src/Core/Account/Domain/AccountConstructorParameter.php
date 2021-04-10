<?php

declare(strict_types=1);

namespace Library\Finances\Core\Account\Domain;

use Library\Finances\Common\Shared\Domain\ValueObject\Currency;
use Library\Finances\Common\Shared\Domain\ValueObject\Money;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;

/**
 * @package Library\Finances\Core\Account\Domain
 */
class AccountConstructorParameter implements AccountConstructorParameterInterface
{
    private ?Money $balance = null;

    public function __construct(
        private AccountId $id,
        private AccountOwnerId $ownerId,
        private Currency $currency
    ) {
    }

    public function getId(): AccountId
    {
        return $this->id;
    }

    public function getOwnerId(): AccountOwnerId
    {
        return $this->ownerId;
    }

    public function getCurrency(): Currency
    {
        return $this->currency;
    }

    public function getBalance(): ?Money
    {
        return $this->balance;
    }

    public function balance(Money $balance): self
    {
        $this->balance = $balance;
        return $this;
    }
}
