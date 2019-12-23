<?php
declare(strict_types=1);

namespace KnotLib\Service\Test;

use KnotLib\Kernel\Logger\EchoLogger;
use KnotLib\Service\LoggerService;
use KnotLib\Service\ValidationService;
use PHPUnit\Framework\TestCase;

use KnotLib\Di\Container;
use KnotLib\Service\DI;
use KnotLib\Service\Exception\ServiceNotFoundException;
use KnotLib\Service\FileSystemService;

final class DiServiceTraitTest extends TestCase
{
    /**
     * @throws
     */
    public function testGetFileSystemService()
    {
        $client = new DiServiceTraitClient();
        $di = new Container();

        try{
            $client->getFileSystemService($di);

            $this->fail('getFileSystemService must throw ServiceNotFoundException');
        }
        catch(ServiceNotFoundException $e){
            $this->assertTrue(true);
        }

        $di[DI::URI_SERVICE_FILESYSTEM] = new FileSystemService(new TestFileSystem());

        $service = $client->getFileSystemService($di);

        $this->assertInstanceOf(FileSystemService::class, $service);
    }
    /**
     * @throws
     */
    public function testGetLoggerService()
    {
        $client = new DiServiceTraitClient();
        $di = new Container();

        try{
            $client->getLoggerService($di);

            $this->fail('getLoggerService must throw ServiceNotFoundException');
        }
        catch(ServiceNotFoundException $e){
            $this->assertTrue(true);
        }

        $di[DI::URI_SERVICE_LOGGER] = new LoggerService(new EchoLogger());

        $service = $client->getLoggerService($di);

        $this->assertInstanceOf(LoggerService::class, $service);
    }
    /**
     * @throws
     */
    public function testGetValidationService()
    {
        $client = new DiServiceTraitClient();
        $di = new Container();

        try{
            $client->getValidationService($di);

            $this->fail('getValidationService must throw ServiceNotFoundException');
        }
        catch(ServiceNotFoundException $e){
            $this->assertTrue(true);
        }

        $di[DI::URI_SERVICE_VALIDATION] = new ValidationService();

        $service = $client->getValidationService($di);

        $this->assertInstanceOf(ValidationService::class, $service);
    }
}