<?php

declare(strict_types=1);

namespace Library\Finances\Core\Account\Infrastructure;

use Doctrine\ORM\Mapping as ORM;
use Library\Finances\Common\Shared\Domain\ValueObject\Currency;
use Library\Finances\Common\Shared\Domain\ValueObject\Money;
use Library\Finances\Core\Account\Domain\AccountConstructorParameterInterface;
use Library\Finances\Core\Account\Domain\AccountId;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;

/**
 * @package Library\Finances\Core\Account\Infrastructure
 * @ORM\Entity()
 */
class AccountEntity implements AccountConstructorParameterInterface
{
    /**
     * @var string
     * @ORM\Id()
     * @ORM\Column(type="guid")
     */
    private string $id;

    public function getId(): AccountId
    {
        // TODO: Implement getId() method.
    }

    public function getOwnerId(): AccountOwnerId
    {
        // TODO: Implement getOwnerId() method.
    }

    public function getBalance(): ?Money
    {
        // TODO: Implement getBalance() method.
    }

    public function getCurrency(): Currency
    {
        // TODO: Implement getCurrency() method.
    }
}
