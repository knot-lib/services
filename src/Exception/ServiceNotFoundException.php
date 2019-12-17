<?php
declare(strict_types=1);

namespace KnotLib\Service\Exception;

use Throwable;

class ServiceNotFoundException extends ServicesException
{
    /**
     * ServiceNotFoundException constructor.
     *
     * @param string $service_uri
     * @param int $code
     * @param Throwable|NULL $prev
     */
    public function __construct( string $service_uri, int $code = 0, Throwable $prev = NULL )
    {
        parent::__construct( "Service not installed: $service_uri", $code, $prev );
    }
}