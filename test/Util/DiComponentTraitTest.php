<?php
declare(strict_types=1);

namespace KnotLib\Service\Test;

use PHPUnit\Framework\TestCase;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

use Nyholm\Psr7\Response;
use Nyholm\Psr7\ServerRequest;

use KnotLib\Di\Container;
use KnotLib\Service\DI;
use KnotLib\Service\Exception\ComponentNotFoundException;

final class DiComponentTraitTest extends TestCase
{
    /**
     * @throws
     */
    public function testGetRequestComponent()
    {
        $client = new DiComponentTraitClient();
        $di = new Container();

        try{
            $client->getRequestComponent($di);

            $this->fail('getRequestComponent must throw ComponentNotFoundException');
        }
        catch(ComponentNotFoundException $e){
            $this->assertTrue(true);
        }

        $di[DI::URI_COMPONENT_REQUEST] = new ServerRequest('get', 'http://example.com');

        $component = $client->getRequestComponent($di);

        $this->assertInstanceOf(ServerRequestInterface::class, $component);
    }
    /**
     * @throws
     */
    public function testGetResponseComponent()
    {
        $client = new DiComponentTraitClient();
        $di = new Container();

        try{
            $client->getResponseComponent($di);

            $this->fail('getResponseComponent must throw ComponentNotFoundException');
        }
        catch(ComponentNotFoundException $e){
            $this->assertTrue(true);
        }

        $di[DI::URI_COMPONENT_RESPONSE] = new Response();

        $component = $client->getResponseComponent($di);

        $this->assertInstanceOf(ResponseInterface::class, $component);
    }
}