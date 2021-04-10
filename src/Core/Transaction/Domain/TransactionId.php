<?php

declare(strict_types=1);

namespace Library\Finances\Core\Transaction\Domain;

use Library\Finances\Common\Shared\Domain\ValueObject\Traits\UuidTrait;

/**
 * @package Library\Finances\Core\Transaction\Domain
 */
class TransactionId
{
    use UuidTrait;
}
