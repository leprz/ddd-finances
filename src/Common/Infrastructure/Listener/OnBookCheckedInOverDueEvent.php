<?php

declare(strict_types=1);

namespace Library\Finances\Common\Infrastructure\Listener;

use Library\Finances\Common\Domain\ValueObject\TimePeriod;
use Library\Finances\Core\AccountOwner\Domain\AccountOwnerId;
use Library\Finances\UseCase\FineChargeForOverDueBook\Application\FineChargeForOverDueBookCommand;
use Library\Finances\UseCase\FineChargeForOverDueBook\Application\FineChargeForOverDueBookHandler;
use Library\SharedKernel\Domain\Event\Circulation\BookCheckedInOverDueEvent;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class OnBookCheckedInOverDueEvent implements MessageHandlerInterface
{
    public function __construct(private FineChargeForOverDueBookHandler $chargeForOverDueBookHandler)
    {
    }

    public function __invoke(BookCheckedInOverDueEvent $event)
    {
        ($this->chargeForOverDueBookHandler)(new FineChargeForOverDueBookCommand(
            AccountOwnerId::fromString($event->getBorrowerId()),
            TimePeriod::fromString($event->getOverDueTimePeriod())
        ));
    }
}
