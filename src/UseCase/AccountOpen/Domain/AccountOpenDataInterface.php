<?php

declare(strict_types=1);

namespace Library\Finances\UseCase\AccountOpen\Domain;

use Library\Finances\Common\Shared\Domain\ValueObject\Currency;
use Library\Finances\Core\Account\Domain\AccountId;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;

/**
 * @package Library\Finances\UseCase\AccountOpen\Domain
 */
interface AccountOpenDataInterface
{
    public function getCurrency(): Currency;

    public function getOwnerId(): AccountOwnerId;

    public function getId(): AccountId;
}
