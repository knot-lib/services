<?php
declare(strict_types=1);

namespace KnotLib\Service\Util;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Container\ContainerInterface as PsrContainerInterface;

use KnotLib\Service\Exception\ComponentNotFoundException;
use KnotLib\Service\Exception\ComponentNotImplementedException;
use KnotLib\Service\DI;

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
     * @throws ComponentNotImplementedException
     */
    public function getRequestComponent(PsrContainerInterface $container) : ServerRequestInterface
    {
        $uri = DI::URI_COMPONENT_REQUEST;
        $component = $container->get($uri);
        if (!$component){
            throw new ComponentNotFoundException($uri);
        }
        if (!($component instanceof ServerRequestInterface)){
            throw new ComponentNotImplementedException($uri, ServerRequestInterface::class);
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
     * @throws ComponentNotImplementedException
     */
    public function getResponseComponent(PsrContainerInterface $container) : ResponseInterface
    {
        $uri = DI::URI_COMPONENT_RESPONSE;
        $component = $container->get($uri);
        if (!$component){
            throw new ComponentNotFoundException($uri);
        }
        if (!($component instanceof ResponseInterface)){
            throw new ComponentNotImplementedException($uri, ResponseInterface::class);
        }
        return $component;
    }
}