<?php

declare(strict_types=1);

namespace Library\Finances\Core\AccountOwner\Infrastructure;

use Doctrine\ORM\Mapping as ORM;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerConstructorParameterInterface;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;

/**
 * @package Library\Finances\Core\AccountOwner\Infrastructure
 * @ORM\Entity()
 */
class AccountOwnerEntity implements AccountOwnerConstructorParameterInterface
{
    /**
     * @var string
     * @ORM\Id()
     * @ORM\Column(type="guid")
     */
    private string $id;

    public function getId(): AccountOwnerId
    {
        return AccountOwnerId::fromString($this->id);
    }
}
