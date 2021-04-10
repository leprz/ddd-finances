<?php

declare(strict_types=1);

namespace Library\Finances\UseCase\FineChargeForOverDueBook\Application;

use Library\Finances\Common\Shared\Domain\ValueObject\Date;
use Library\Finances\Common\Shared\Domain\ValueObject\DateTime;
use Library\Finances\Common\Shared\Domain\ValueObject\TimePeriod;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;
use Library\Finances\Core\Fine\Domain\FineId;
use Library\Finances\UseCase\FineChargeForOverDueBook\Domain\FineChargeForOverDueBookDataInterface;

/**
 * @package Library\Finances\UseCase\FineChargeForOverDueBook\Application
 */
class FineChargeForOverDueBookCommand implements FineChargeForOverDueBookDataInterface
{
    public function __construct(
        private FineId $fineId,
        private AccountOwnerId $accountOwnerId,
        private TimePeriod $overDueTimePeriod,
        private DateTime $imposedAt,
    ) {
    }

    public function getAccountOwnerId(): AccountOwnerId
    {
        return $this->accountOwnerId;
    }

    public function getOverdueTimePeriod(): TimePeriod
    {
        return $this->overDueTimePeriod;
    }

    public function getImposedAt(): Date
    {
        return $this->imposedAt->toDate();
    }

    public function getFineId(): FineId
    {
        return $this->fineId;
    }
}
