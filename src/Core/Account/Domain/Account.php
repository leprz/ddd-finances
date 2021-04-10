<?php

declare(strict_types=1);

namespace Library\Finances\Core\Account\Domain;

use Library\Finances\Common\AccountDebit\Domain\AccountDebitActionInterface;
use Library\Finances\Common\Shared\Domain\ValueObject\Date;
use Library\Finances\Common\Shared\Domain\ValueObject\Money;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;
use Library\Finances\Core\Transaction\Domain\Transaction;
use Library\Finances\UseCase\AccountOpen\Domain\AccountOpenActionInterface;
use Library\Finances\UseCase\AccountOpen\Domain\AccountOpenDataInterface;

/**
 * @package Library\Finances\Core\Account\Domain
 */
class Account
{
    private AccountId $id;

    private AccountOwnerId $ownerId;

    private Money $balance;

    /**
     * @param \Library\Finances\Core\Account\Domain\AccountConstructorParameterInterface
     */
    public function __construct(AccountConstructorParameterInterface $data)
    {
        $this->id = $data->getId();
        $this->ownerId = $data->getOwnerId();
        $this->balance = $data->getBalance() ?? Money::create(0, $data->getCurrency());
    }

    public static function open(AccountOpenDataInterface $data, AccountOpenActionInterface $action): self
    {
        $initialBalance = Money::create(0, $data->getCurrency());

        return new self(
            (new AccountConstructorParameter(
                $data->getId(),
                $data->getOwnerId(),
                $initialBalance->getCurrency()
            ))->balance($initialBalance)
        );
    }

    public function topUp(): Transaction
    {
    }

    public function debit(string $description, Money $debit, Date $date, AccountDebitActionInterface $action): Transaction
    {
        $this->balance = $this->balance->subtract($debit);

        // TODO Some debit policy interface eg. if more than -100$ then suspend account

        return Transaction::loss(
            $action->getNextTransactionId(),
            $this->id,
            $description,
            $debit,
            $date
        );
    }
}
