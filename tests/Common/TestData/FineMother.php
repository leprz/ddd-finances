<?php

declare(strict_types=1);

namespace Library\Finances\Tests\Common\TestData;

use Library\Finances\Core\Fine\Domain\Fine;
use Library\Finances\Tests\Common\TestData\Reader\FineMotherReader;

class FineMother
{
    public static function read(Fine $fine): FineMotherReader
    {
        return new FineMotherReader($fine);
    }
}
