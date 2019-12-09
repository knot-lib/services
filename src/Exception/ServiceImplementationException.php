<?php
namespace KnotLib\Service\Exception;

use Throwable;

class ServiceImplementationException extends ServicesException
{
    /**
     * ClassNotFoundException constructor.
     *
     * @param string $object
     * @param string $interface_name
     * @param int $code
     * @param Throwable|NULL $prev
     */
    public function __construct( string $object, string $interface_name, int $code = 0, Throwable $prev = NULL )
    {
        parent::__construct( "Service($object) must implement interface: $interface_name", $code, $prev );
    }
}