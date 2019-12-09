<?php
declare(strict_types=1);

namespace KnotLib\Service;

use Psr\Container\ContainerInterface as PsrContainerInterface;
use KnotLib\Service\Exception\ServiceImplementationException;
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
     * @throws ServiceImplementationException
     */
    public function getFileSystemService(PsrContainerInterface $container) : FileSystemService
    {
        $service = $container->get(DI::SERVICE_FILESYSTEM);
        if (!$service){
            throw new ServiceNotFoundException(DI::SERVICE_FILESYSTEM);
        }
        if (!($service instanceof FileSystemService)){
            throw new ServiceImplementationException($service, FileSystemService::class);
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
     * @throws ServiceImplementationException
     */
    public function getLoggerService(PsrContainerInterface $container) : LoggerService
    {
        $service = $container->get(DI::SERVICE_LOGGER);
        if (!$service){
            throw new ServiceNotFoundException(DI::SERVICE_LOGGER);
        }
        if (!($service instanceof LoggerService)){
            throw new ServiceImplementationException($service, LoggerService::class);
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
     * @throws ServiceImplementationException
     */
    public function getValidationService(PsrContainerInterface $container) : ValidationService
    {
        $service = $container->get(DI::SERVICE_VALIDATION);
        if (!$service){
            throw new ServiceNotFoundException(DI::SERVICE_VALIDATION);
        }
        if (!($service instanceof ValidationService)){
            throw new ServiceImplementationException($service, ValidationService::class);
        }
        return $service;
    }

    /**
     * Get request service defined in DI container
     *
     * @param PsrContainerInterface $container
     *
     * @return RequestService
     *
     * @throws ServiceNotFoundException
     * @throws ServiceImplementationException
     */
    public function getRequestService(PsrContainerInterface $container) : RequestService
    {
        $service = $container->get(DI::SERVICE_REQUEST);
        if (!$service){
            throw new ServiceNotFoundException(DI::SERVICE_REQUEST);
        }
        if (!($service instanceof RequestService)){
            throw new ServiceImplementationException($service, RequestService::class);
        }
        return $service;
    }
}