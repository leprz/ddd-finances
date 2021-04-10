<?php

declare(strict_types=1);

namespace Library\Finances\UseCase\FineChargeForOverDueBook\Application;

use Psr\Log\LoggerInterface;

/**
 * @package Library\Finances\UseCase\FineChargeForOverDueBook\Application
 */
class FineChargeForOverDueBookHandler
{
    public function __construct(private LoggerInterface $logger)
    {
    }

    /**
     * @param \Library\Finances\UseCase\FineChargeForOverDueBook\Application\FineChargeForOverDueBookCommand
     * @return void
     */
    public function __invoke(FineChargeForOverDueBookCommand $command): void
    {

    }
}
