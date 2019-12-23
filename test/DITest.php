<?php
declare(strict_types=1);

namespace KnotLib\Service\Test;

use KnotLib\Service\DI;
use PHPUnit\Framework\TestCase;

final class DITest extends TestCase
{
    public function testConstants()
    {
        $this->assertEquals('component://request', DI::URI_COMPONENT_REQUEST);
        $this->assertEquals('component://response', DI::URI_COMPONENT_RESPONSE);

        $this->assertEquals('service://filesystem', DI::URI_SERVICE_FILESYSTEM);
        $this->assertEquals('service://logger', DI::URI_SERVICE_LOGGER);
        $this->assertEquals('service://validation', DI::URI_SERVICE_VALIDATION);
    }
}