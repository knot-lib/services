<?php
namespace KnotLib\Service\Exception;

use Throwable;

class InterfaceNotImplementedException extends ServicesException
{
    /**
     * InterfaceNotImplementedException constructor.
     *
     * @param string $key
     * @param string $interface_name
     * @param int $code
     * @param Throwable|NULL $prev
     */
    public function __construct( string $key, string $interface_name, int $code = 0, Throwable $prev = NULL )
    {
        parent::__construct( "Copmonent($key) must implement interface: $interface_name", $code, $prev );
    }
}