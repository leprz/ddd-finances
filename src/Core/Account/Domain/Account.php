<?php

declare(strict_types=1);

namespace Library\Finances\Core\Account\Domain;

/**
 * @package Library\Finances\Core\Account\Domain
 */
class Account
{
    /**
     * @param \Library\Finances\Core\Account\Domain\AccountConstructorParameterInterface
     */
    public function __construct(AccountConstructorParameterInterface $data)
    {
    }
}
