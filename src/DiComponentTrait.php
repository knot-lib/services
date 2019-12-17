<?php
declare(strict_types=1);

namespace KnotLib\Service;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Container\ContainerInterface as PsrContainerInterface;

use KnotLib\Service\Exception\ComponentNotFoundException;
use KnotLib\Service\Exception\InterfaceNotImplementedException;

trait DiComponentTrait
{
    /**
     * Get server request object defined in DI container
     *
     * @param PsrContainerInterface $container
     *
     * @return ServerRequestInterface
     *
     * @throws ComponentNotFoundException
     * @throws InterfaceNotImplementedException
     */
    public function getRequestComponent(PsrContainerInterface $container) : ServerRequestInterface
    {
        $component = $container->get(DI::URI_COMPONENT_REQUEST);
        if (!$component){
            throw new ComponentNotFoundException(DI::URI_COMPONENT_REQUEST);
        }
        if (!($component instanceof ServerRequestInterface)){
            throw new InterfaceNotImplementedException(DI::URI_COMPONENT_REQUEST, ServerRequestInterface::class);
        }
        return $component;
    }

    /**
     * Get response object defined in DI container
     *
     * @param PsrContainerInterface $container
     *
     * @return ResponseInterface
     *
     * @throws ComponentNotFoundException
     * @throws InterfaceNotImplementedException
     */
    public function getResponseComponent(PsrContainerInterface $container) : ResponseInterface
    {
        $component = $container->get(DI::URI_COMPONENT_RESPNSE);
        if (!$component){
            throw new ComponentNotFoundException(DI::URI_COMPONENT_RESPNSE);
        }
        if (!($component instanceof ResponseInterface)){
            throw new InterfaceNotImplementedException(DI::URI_COMPONENT_RESPNSE, ResponseInterface::class);
        }
        return $component;
    }
}