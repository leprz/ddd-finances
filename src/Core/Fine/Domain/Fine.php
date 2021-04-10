<?php

/** @noinspection PhpPropertyOnlyWrittenInspection */

declare(strict_types=1);

namespace Library\Finances\Core\Fine\Domain;

use Library\Finances\Common\Shared\Domain\ValueObject\Currency;
use Library\Finances\Common\Shared\Domain\ValueObject\Date;
use Library\Finances\Common\Shared\Domain\ValueObject\Money;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;
use Library\Finances\UseCase\FineChargeForOverDueBook\Domain\FineChargeForOverDueBookActionInterface;
use Library\Finances\UseCase\FineChargeForOverDueBook\Domain\FineChargeForOverDueBookDataInterface;

/**
 * @package Library\Finances\Core\Fine\Domain
 */
class Fine
{
    private FineId $id;

    private AccountOwnerId $punishedAccountOwnerId;

    private int $units;

    private Money $pricePerUnit;

    private Money $processingFee;

    private Money $total;

    private Date $imposedAt;

    /**
     * @param \Library\Finances\Core\Fine\Domain\FineConstructorParameterInterface
     */
    protected function __construct(FineConstructorParameterInterface $data)
    {
        $this->id = $data->getId();
        $this->punishedAccountOwnerId = $data->getPunishedAccountOwnerId();
        $this->units = $data->getUnits();
        $this->pricePerUnit = $data->getPricePerUnit();
        $this->imposedAt = $data->getImposedAt();
        $this->total = $data->getTotal();
    }

    private static function impose(
        FineId $id,
        AccountOwnerId $ownerId,
        int $units,
        Date $imposedAt,
        FineCalculatorInterface $fineCalculator
    ): self {
        return new self(
            new FineConstructorParameter(
                $id,
                $ownerId,
                $units,
                $fineCalculator->getPricePerUnit(),
                // TODO check maximum processing fee
                $fineCalculator->calculateTotal($units, Money::createFromMainUnit(0, Currency::default())),
                $imposedAt
            )
        );
    }

    public static function imposeForOverdueBook(
        FineChargeForOverDueBookDataInterface $data,
        FineChargeForOverDueBookActionInterface $action,
        FineForOverdueBookPolicy $policy
    ): self {
        $overdueTimePeriod = $data->getOverdueTimePeriod();

        $fine = Fine::impose(
            $data->getFineId(),
            $data->getAccountOwnerId(),
            $policy->getUnits($overdueTimePeriod),
            $data->getImposedAt(),
            $policy
        );

        $transaction = $action->getOwnersAccount(
            $data->getAccountOwnerId()
        )->debit('Fine for book', $fine->total, $data->getImposedAt(), $action);

        $action->recordTransaction($transaction);

        return $fine;
    }
}
