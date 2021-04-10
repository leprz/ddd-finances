<?php

declare(strict_types=1);

namespace Library\Finances\Common\Shared\Domain\ValueObject;

use Library\SharedKernel\Infrastructure\Money\MoneyTrait;

class Money
{
    use MoneyTrait;

    public static function create(int $amount, Currency $currency): self
    {
        return self::_create($amount, $currency->getCode());
    }

    public static function createFromMainUnit(float $amount, Currency $currency): self
    {
        return self::_create((int) $amount * 10, $currency->getCode());
    }

    public function add(Money $money): self
    {
        return $this->_add($money);
    }

//    Just for test if trait method may not be overriden
//    public function negative(): self
//    {
//        return $this->_negative();
//    }

    public function subtract(Money $subtrahend): self
    {
        return $this->_subtract($subtrahend);
    }

    public function getCurrency(): Currency
    {
        return Currency::fromCode($this->_getCurrencyCode());
    }

    public function multiply(float $multiplier): self
    {
        return $this->_multiply($multiplier);
    }

    public function equals(Money $money): bool
    {
        return $this->_equals($money);
    }

    public function isGreaterThan(self $money): bool
    {
        return $this->_greaterThan($money);
    }
}
