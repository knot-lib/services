<?php
declare(strict_types=1);

namespace knotlib\service\exception;

use Throwable;

class ServiceNotFoundException extends ServicesException
{
    /**
     * ServiceNotFoundException constructor.
     *
     * @param string $service_uri
     * @param Throwable|NULL $prev
     */
    public function __construct( string $service_uri, Throwable $prev = NULL )
    {
        parent::__construct( "Service not installed: $service_uri", $prev );
    }
}