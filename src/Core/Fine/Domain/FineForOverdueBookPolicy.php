<?php

declare(strict_types=1);

namespace Library\Finances\Core\Fine\Domain;

use Library\Finances\Common\Shared\Domain\ValueObject\Currency;
use Library\Finances\Common\Shared\Domain\ValueObject\Money;
use Library\Finances\Common\Shared\Domain\ValueObject\TimePeriod;

class FineForOverdueBookPolicy implements FineCalculatorInterface
{
    private Money $pricePerUnit;

    private Money $maximumFineForItem;

    private Money $longOverdueProcessingFee;

    public function __construct()
    {
        $this->pricePerUnit = Money::createFromMainUnit(2, Currency::fromCode('USD'));
        $this->maximumFineForItem = Money::createFromMainUnit(20, Currency::default());
        $this->longOverdueProcessingFee = Money::createFromMainUnit(20, Currency::default());
    }

    public function getUnits(TimePeriod $overdueTimePeriod): int
    {
        return $overdueTimePeriod->getDays();
    }

    public function getPricePerUnit(): Money
    {
        return $this->pricePerUnit;
    }

    public function calculateTotal(int $overdueDays, Money $alreadyImposedProcessingFeesAtThisDay): Money
    {
        $total = $this->pricePerUnit->multiply(
            $overdueDays
        );

        if ($total->isGreaterThan($this->maximumFineForItem)) {
            $total = $this->maximumFineForItem;
        }

        if ($overdueDays >= 30) {
            $total = $total->add($this->longOverdueProcessingFee);
        }

        return $total;
    }
}
