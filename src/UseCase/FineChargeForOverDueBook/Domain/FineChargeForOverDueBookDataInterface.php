<?php

declare(strict_types=1);

namespace Library\Finances\UseCase\FineChargeForOverDueBook\Domain;

use Library\Finances\Common\Shared\Domain\ValueObject\Date;
use Library\Finances\Common\Shared\Domain\ValueObject\DateTime;
use Library\Finances\Common\Shared\Domain\ValueObject\TimePeriod;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;
use Library\Finances\Core\Fine\Domain\FineId;

/**
 * @package Library\Finances\UseCase\FineChargeForOverDueBook\Domain
 */
interface FineChargeForOverDueBookDataInterface
{
    public function getAccountOwnerId(): AccountOwnerId;

    public function getOverdueTimePeriod(): TimePeriod;

    public function getImposedAt(): Date;

    public function getFineId(): FineId;
}
