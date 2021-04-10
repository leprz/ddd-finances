<?php

declare(strict_types=1);

namespace Library\Finances\Core\Fine\Domain;

use Library\Finances\Common\Shared\Domain\ValueObject\Date;
use Library\Finances\Common\Shared\Domain\ValueObject\Money;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;

/**
 * @package Library\Finances\Core\Fine\Domain
 */
interface FineConstructorParameterInterface
{
    public function getId(): FineId;

    public function getPunishedAccountOwnerId(): AccountOwnerId;

    public function getUnits(): int;

    public function getPricePerUnit(): Money;

    public function getTotal(): Money;

    public function getImposedAt(): Date;
}
