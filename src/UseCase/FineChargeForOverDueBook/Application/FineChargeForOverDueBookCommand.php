<?php

declare(strict_types=1);

namespace Library\Finances\UseCase\FineChargeForOverDueBook\Application;

use Library\Finances\Common\Domain\ValueObject\TimePeriod;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;

/**
 * @package Library\Finances\UseCase\FineChargeForOverDueBook\Application
 */
class FineChargeForOverDueBookCommand
{
    public function __construct(private AccountOwnerId $accountOwnerId, private TimePeriod $overDueTimePeriod)
    {
    }

}
