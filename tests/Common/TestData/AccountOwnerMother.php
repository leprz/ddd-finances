<?php

declare(strict_types=1);

namespace Library\Finances\Tests\Common\TestData;

use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;

class AccountOwnerMother
{
    public static function defaultId(): AccountOwnerId
    {
        return AccountOwnerId::fromString('037d33cc-8eb9-4a1a-abfe-f061d20a822a');
    }
}
