<?php
declare(strict_types=1);

namespace KnotLib\Service;

use Psr\Container\ContainerInterface as PsrContainerInterface;

use KnotLib\Service\Exception\InterfaceNotImplementedException;
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
     * @throws InterfaceNotImplementedException
     */
    public function getFileSystemService(PsrContainerInterface $container) : FileSystemService
    {
        $service = $container->get(DI::URI_SERVICE_FILESYSTEM);
        if (!$service){
            throw new ServiceNotFoundException(DI::URI_SERVICE_FILESYSTEM);
        }
        if (!($service instanceof FileSystemService)){
            throw new InterfaceNotImplementedException(DI::URI_SERVICE_FILESYSTEM, FileSystemService::class);
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
     * @throws InterfaceNotImplementedException
     */
    public function getLoggerService(PsrContainerInterface $container) : LoggerService
    {
        $service = $container->get(DI::URI_SERVICE_LOGGER);
        if (!$service){
            throw new ServiceNotFoundException(DI::URI_SERVICE_LOGGER);
        }
        if (!($service instanceof LoggerService)){
            throw new InterfaceNotImplementedException(DI::URI_SERVICE_LOGGER, LoggerService::class);
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
     * @throws InterfaceNotImplementedException
     */
    public function getValidationService(PsrContainerInterface $container) : ValidationService
    {
        $service = $container->get(DI::URI_SERVICE_VALIDATION);
        if (!$service){
            throw new ServiceNotFoundException(DI::URI_SERVICE_VALIDATION);
        }
        if (!($service instanceof ValidationService)){
            throw new InterfaceNotImplementedException(DI::URI_SERVICE_VALIDATION, ValidationService::class);
        }
        return $service;
    }
}