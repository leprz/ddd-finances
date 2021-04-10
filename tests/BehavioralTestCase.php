<?php

declare(strict_types=1);

namespace Library\Finances\Tests;

use Library\Finances\Tests\Behat\Traits\ErrorContext;
use Library\SharedKernel\Infrastructure\Behat\BehaviourTestCaseTrait;

abstract class BehavioralTestCase
{
    use BehaviourTestCaseTrait;
    use ErrorContext;

    protected static function requirePhpUnit(): void
    {
        require_once __DIR__ . '/../bin/.phpunit/phpunit-9.4-0/vendor/autoload.php';
    }
}
