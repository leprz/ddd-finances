<?php

declare(strict_types=1);

namespace Library\Finances\Common\Shared\Infrastructure\Money;

use Library\Finances\Common\Shared\Domain\ValueObject\Currency;
use Library\Finances\Common\Shared\Domain\ValueObject\Money;
use PHPUnit\Framework\TestCase;

class MoneyAdapterTest extends TestCase
{
    /**
     * @test
     * @small
     */
    public function subtract_gives_correct_value(): void
    {
        $money = Money::create(10, Currency::fromCode('USD'));
        $subtrahend = Money::create(10, Currency::fromCode('USD'));
        $result = $money->subtract($subtrahend);
        $noMoney = Money::create(0, Currency::fromCode('USD'));

        $res = $money->negative();
        self::assertEquals($noMoney, $result);
    }
}
