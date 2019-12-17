<?php
namespace KnotLib\Service\Exception;

use Throwable;

class ComponentNotImplementedException extends ServicesException
{
    /**
     * ComponentNotImplementedException constructor.
     *
     * @param string $copmonent_uri
     * @param string $interface_name
     * @param int $code
     * @param Throwable|NULL $prev
     */
    public function __construct( string $copmonent_uri, string $interface_name, int $code = 0, Throwable $prev = NULL )
    {
        parent::__construct( "Component($copmonent_uri) must implement interface: $interface_name", $code, $prev );
    }
}