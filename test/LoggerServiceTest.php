<?php
declare(strict_types=1);

namespace KnotLib\Service\Test;

use Exception;

use KnotLib\Kernel\Logger\Channels;
use KnotLib\Kernel\Logger\EchoLogger;
use KnotLib\Service\LoggerService;
use PHPUnit\Framework\TestCase;

final class LoggerServiceTest extends TestCase
{
    public function testSetChannel()
    {
        $logger = new LoggerService(new EchoLogger());

        $this->assertEquals(Channels::DEFAULT, $logger->getChannelId());

        $logger->setChannelId('my channel');

        $this->assertEquals('my channel', $logger->getChannelId());
    }
    public function testLogException()
    {
        $logger = new LoggerService(new EchoLogger());

        $e = new Exception('test exception');

        ob_start();
        $logger->logException($e);
        $contents = ob_get_clean();

        $this->assertRegExp('/=====\[ Exception Stack \]=====/', $contents);
        $this->assertRegExp('/=====\[ Call Stack \]=====/', $contents);
    }
}