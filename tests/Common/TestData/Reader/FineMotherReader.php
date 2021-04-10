<?php

declare(strict_types=1);

namespace Library\Finances\Tests\Common\TestData\Reader;

use Library\Finances\Common\Shared\Domain\ValueObject\Money;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;
use Library\Finances\Core\Fine\Domain\Fine;

class FineMotherReader
{
    public function __construct(private Fine $model)
    {
    }

    public function punishedAccountOwnerId(): AccountOwnerId
    {
        return $this->readPrivateProperty('punishedAccountOwnerId');
    }

    private function readPrivateProperty(string $name): mixed
    {
        $property =  new \ReflectionProperty($this->model, $name);
        $property->setAccessible(true);
        return $property->getValue($this->model);
    }

    public function getTotal(): Money
    {
        return $this->readPrivateProperty('total');
    }
}
