<?php

declare(strict_types=1);

namespace Library\Finances\Tests\Common\TestData;

use Library\Finances\Common\Shared\Domain\ValueObject\Currency;
use Library\Finances\Core\Account\Domain\Account;
use Library\Finances\Core\Account\Domain\AccountConstructorParameter;
use Library\Finances\Core\Account\Domain\AccountId;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;

class AccountMother
{
    public static function default(): Account
    {
        return new Account(
            new AccountConstructorParameter(
                AccountId::fromString('05aa0f88-d323-4ac0-af64-795d8e1464fc'),
                AccountOwnerId::fromString('9270120a-10a7-41f7-aef4-163248a00d2e'),
                Currency::fromCode('USD')
            )
        );
    }
}
