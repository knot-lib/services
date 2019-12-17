<?php
declare(strict_types=1);

namespace KnotLib\Service;

use Psr\Container\ContainerInterface as PsrContainerInterface;

use KnotLib\Service\Exception\ComponentNotImplementedException;
use KnotLib\Service\Exception\ServiceNotFoundException;

trait DiServiceTrait
{
    /**
     * Get file system service defined in DI container
     *
     * @param PsrContainerInterface $container
     *
     * @return FileSystemService
     *
     * @throws ServiceNotFoundException
     * @throws ComponentNotImplementedException
     */
    public function getFileSystemService(PsrContainerInterface $container) : FileSystemService
    {
        $uri = DI::URI_SERVICE_FILESYSTEM;
        $service = $container->get($uri);
        if (!$service){
            throw new ServiceNotFoundException($uri);
        }
        if (!($service instanceof FileSystemService)){
            throw new ComponentNotImplementedException($uri, FileSystemService::class);
        }
        return $service;
    }

    /**
     * Get logger service defined in DI container
     *
     * @param PsrContainerInterface $container
     *
     * @return LoggerService
     *
     * @throws ServiceNotFoundException
     * @throws ComponentNotImplementedException
     */
    public function getLoggerService(PsrContainerInterface $container) : LoggerService
    {
        $uri = DI::URI_SERVICE_LOGGER;
        $service = $container->get($uri);
        if (!$service){
            throw new ServiceNotFoundException($uri);
        }
        if (!($service instanceof LoggerService)){
            throw new ComponentNotImplementedException($uri, LoggerService::class);
        }
        return $service;
    }

    /**
     * Get validation service defined in DI container
     *
     * @param PsrContainerInterface $container
     *
     * @return ValidationService
     *
     * @throws ServiceNotFoundException
     * @throws ComponentNotImplementedException
     */
    public function getValidationService(PsrContainerInterface $container) : ValidationService
    {
        $uri = DI::URI_SERVICE_VALIDATION;
        $service = $container->get($uri);
        if (!$service){
            throw new ServiceNotFoundException($uri);
        }
        if (!($service instanceof ValidationService)){
            throw new ComponentNotImplementedException($uri, ValidationService::class);
        }
        return $service;
    }
}