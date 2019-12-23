<?php
declare(strict_types=1);

namespace KnotLib\Service\Test;

use PHPUnit\Framework\TestCase;

final class ComponentUriTraitTest extends TestCase
{
    public function testUri()
    {
        // database component
        $uri = ComponentUriTraitClient::uri('component', 'database');

        $this->assertEquals('component://database', $uri);

        // default connection uri
        $uri = ComponentUriTraitClient::uri('component', 'connection', 'default');

        $this->assertEquals('component://connection:default', $uri);
    }
}