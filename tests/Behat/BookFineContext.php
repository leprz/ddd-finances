<?php

declare(strict_types=1);

namespace Library\Finances\Tests\Behat;

use Behat\Behat\Context\Context;
use Library\Finances\Common\Date\Infrastructure\DateTimeBuilder;
use Library\Finances\Common\Shared\Domain\ValueObject\Currency;
use Library\Finances\Common\Shared\Domain\ValueObject\Money;
use Library\Finances\Common\Shared\Domain\ValueObject\TimePeriod;
use Library\Finances\Core\Account\Application\AccountRepositoryInterface;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;
use Library\Finances\Core\Fine\Domain\Fine;
use Library\Finances\Core\Fine\Domain\FineForOverdueBookPolicy;
use Library\Finances\Core\Fine\Domain\FineId;
use Library\Finances\Core\Fine\Infrastructure\FineEntityMapper;
use Library\Finances\Tests\BehavioralTestCase;
use Library\Finances\Tests\Common\TestData\AccountMother;
use Library\Finances\Tests\Common\TestData\AccountOwnerMother;
use Library\Finances\Tests\Common\TestData\FineMother;
use Library\Finances\Tests\Common\TestData\Reader\FineMotherReader;
use Library\Finances\UseCase\FineChargeForOverDueBook\Application\FineChargeForOverDueBookCommand;
use Library\Finances\UseCase\FineChargeForOverDueBook\Domain\FineChargeForOverDueBookActionInterface;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\MockObject\MockObject;

class BookFineContext extends BehavioralTestCase implements Context
{
    private FineForOverdueBookPolicy $fineForOverdueBookPolicy;

    private FineChargeForOverDueBookActionInterface $fineChargeForOverDueBookActionInterface;

    private AccountOwnerId $myId;

    private FineEntityMapper $fineEntityMapper;

    private MockObject|AccountRepositoryInterface $accountRepositoryMock;

    /**
     * @var \Library\Finances\Tests\Common\TestData\Reader\FineMotherReader
     */
    private FineMotherReader $fine;

    /**
     * @Given /^There is an account$/
     */
    public function thereIsAnAccount(): void
    {
        $this->accountRepositoryMock->method('getByOwnerId')->willReturn(
            AccountMother::default()
        );
    }

    /**
     * @When /^Me as owner of this account returned book (\d+) days overdue$/
     */
    public function meAsOwnerOfThisAccountReturnedBookDaysOverdue(int $days): void
    {
        $this->myId = AccountOwnerMother::defaultId();
        $fine = Fine::imposeForOverdueBook(
            new FineChargeForOverDueBookCommand(
                FineId::fromString('e103bfd5-afae-494d-860b-af343df090c6'),
                $this->myId,
                new TimePeriod($days, 0, 0),
                DateTimeBuilder::fromString('2020-01-01 10:00:00')
            ),
            $this->fineChargeForOverDueBookActionInterface,
            $this->fineForOverdueBookPolicy
        );

        $this->fine = FineMother::read($fine);
    }

    /**
     * @Then /^I'm punished by fine$/
     */
    public function iMPunishedByFine()
    {
        Assert::assertTrue(
            $this->myId->equals(
                $this->fine->punishedAccountOwnerId()
            )
        );
    }

    /**
     * @Given /^Fine value is ([-]?\$\d+)$/
     */
    public function fineValueIs(string $fineValue)
    {
        $fineValue = (float)filter_var($fineValue, FILTER_SANITIZE_NUMBER_FLOAT);
        $actualFineValue = $this->fine->getTotal()->getAmountInMainUnit();
        Assert::assertSame($fineValue, $actualFineValue);
    }

    protected function setUp(): void
    {
        $this->fineEntityMapper = $this->resolve(FineEntityMapper::class);
        $this->accountRepositoryMock = $this->bindMock(AccountRepositoryInterface::class);
        $this->fineForOverdueBookPolicy = $this->resolve(FineForOverdueBookPolicy::class);
        $this->fineChargeForOverDueBookActionInterface = $this->resolve(FineChargeForOverDueBookActionInterface::class);
    }
}
