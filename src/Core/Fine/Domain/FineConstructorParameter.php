<?php

declare(strict_types=1);

namespace Library\Finances\Core\Fine\Domain;

use Library\Finances\Common\Shared\Domain\ValueObject\Date;
use Library\Finances\Common\Shared\Domain\ValueObject\Money;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;

/**
 * @package Library\Finances\Core\Fine\Domain
 */
class FineConstructorParameter implements FineConstructorParameterInterface
{
    public function __construct(
        private FineId $id,
        private AccountOwnerId $punishedAccountOwnerId,
        private int $units,
        private Money $pricePerUnit,
        private Money $total,
        private Date $imposedAt,
    ) {
    }

    public function getId(): FineId
    {
        return $this->id;
    }

    public function getPunishedAccountOwnerId(): AccountOwnerId
    {
        return $this->punishedAccountOwnerId;
    }

    public function getUnits(): int
    {
        return $this->units;
    }

    public function getPricePerUnit(): Money
    {
        return $this->pricePerUnit;
    }

    public function getTotal(): Money
    {
        return $this->total;
    }

    public function getImposedAt(): Date
    {
        return $this->imposedAt;
    }
}
