<?php

declare(strict_types=1);

namespace PHPSTORM_META;

use Doctrine\ORM\EntityManagerInterface;

// Make the service resolver return the same type as the input parameter
override(EntityManagerInterface::getReference(), type(0));
override(\Library\Finances\Tests\BehavioralTestCase::resolve(), type(0));
// override(BehavioralTestCase::bindMock(), type(0));
