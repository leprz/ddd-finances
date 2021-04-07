<?php

declare(strict_types=1);

namespace Library\Finances\Core\Fine\Domain;

/**
 * @package Library\Finances\Core\Fine\Domain
 */
class Fine
{
    private FineId $id;
    private Money $pricePerUnit;
    private int $units;
    private Money $charge;

    /**
     * @param \Library\Finances\Core\Fine\Domain\FineConstructorParameterInterface
     */
    public function __construct(FineConstructorParameterInterface $data)
    {
    }

    public function charge(): AccountExpense
    {
        // price for fine unit
        // multiple by units
        // create account expense with calculated fine
    }
}
