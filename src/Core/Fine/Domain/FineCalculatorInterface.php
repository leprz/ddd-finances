<?php

declare(strict_types=1);

namespace Library\Finances\Core\Fine\Domain;

use Library\Finances\Common\Shared\Domain\ValueObject\Money;

interface FineCalculatorInterface
{
    public function calculateTotal(int $overdueDays, Money $alreadyImposedProcessingFeesAtThisDay): Money;

    public function getPricePerUnit(): Money;
}
