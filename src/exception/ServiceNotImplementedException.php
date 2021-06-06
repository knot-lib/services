<?php
namespace knotlib\service\exception;

use Throwable;

class ServiceNotImplementedException extends ServicesException
{
    /**
     * ServiceNotImplementedException constructor.
     *
     * @param string $service_uri
     * @param string $interface_name
     * @param Throwable|NULL $prev
     */
    public function __construct( string $service_uri, string $interface_name, Throwable $prev = NULL )
    {
        parent::__construct( "Service($service_uri) must implement interface: $interface_name", $prev );
    }
}