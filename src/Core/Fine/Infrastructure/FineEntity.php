<?php

declare(strict_types=1);

namespace Library\Finances\Core\Fine\Infrastructure;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping as ORM;
use Library\Finances\Common\Shared\Domain\ValueObject\Currency;
use Library\Finances\Common\Shared\Domain\ValueObject\Date;
use Library\Finances\Common\Shared\Domain\ValueObject\Money;
use Library\Finances\Core\Account\Infrastructure\AccountEntity;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;
use Library\Finances\Core\AccountOwner\Infrastructure\AccountOwnerEntity;
use Library\Finances\Core\Fine\Domain\FineConstructorParameterInterface;
use Library\Finances\Core\Fine\Domain\FineId;

/**
 * @ORM\Entity()
 * @ORM\Table(name="fine")
 */
class FineEntity implements FineConstructorParameterInterface
{
    /**
     * @var string
     * @ORM\Id()
     * @ORM\Column(type="guid")
     */
    private string $id;

    /**
     * @var \Library\Finances\Core\Account\Infrastructure\AccountEntity
     * @ORM\ManyToOne(targetEntity=Library\Finances\Core\Account\Infrastructure\AccountEntity")
     */
    private AccountEntity $account;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private int $units;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private int $pricePerUnit;

    /**
     * @var int
     * @ORM\Column(type="integer")
     */
    private int $total;

    /**
     * @var \Library\Finances\Common\Shared\Domain\ValueObject\Date
     * @ORM\Column(type="date")
     */
    private Date $imposedAt;

    public function __construct(FineId $id, AccountOwnerEntity $punishedAccountOwnerEntity, Money $pricePerUnit, int $units, Money $total, Date $imposedAt)
    {
        $this->setId($id);
        $this->setPunishedAccountOwner($punishedAccountOwnerEntity);
        $this->setPricePerUnit($pricePerUnit);
        $this->setUnits($units);
        $this->setTotal($total);
        $this->imposedAt = $imposedAt;
    }

    public function setPunishedAccountOwner(AccountOwnerEntity $punishedAccountOwnerEntity): void
    {
        $this->account = $punishedAccountOwnerEntity;
    }

    public function getId(): FineId
    {
        return FineId::fromString($this->id);
    }

    public function setId(FineId $id): void
    {
        $this->id = (string)$id;
    }

    public function getPunishedAccountOwnerId(): AccountOwnerId
    {
        return $this->account->getOwnerId();
    }

    public function getUnits(): int
    {
        return $this->units;
    }

    public function setUnits(int $units): void
    {
        $this->units = $units;
    }

    public function getPricePerUnit(): Money
    {
        return Money::create($this->pricePerUnit, Currency::default());
    }

    public function setPricePerUnit(Money $pricePerUnit): void
    {
        $this->pricePerUnit = $pricePerUnit->getAmount();
    }

    public function getTotal(): Money
    {
        return Money::create($this->total, Currency::default());
    }

    public function setTotal(Money $total): void
    {
        $this->total = $total->getAmount();
    }

    public function setPunishedAccountOwnerId(AccountOwnerId $ownerId, EntityManagerInterface $entityManager): void
    {
        /** @noinspection PhpUnhandledExceptionInspection */
        /** @noinspection PhpFieldAssignmentTypeMismatchInspection */
        $this->account = $entityManager->getReference(AccountEntity::class, $ownerId);
    }

    public function getImposedAt(): Date
    {
        return $this->imposedAt;
    }
}
