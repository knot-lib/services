<?php
declare(strict_types=1);

namespace KnotLib\Service\Exception;

use Throwable;

class ServiceNotFoundException extends ServicesException
{
    /**
     * ServiceNotInstalledException constructor.
     *
     * @param string $service
     * @param int $code
     * @param Throwable|NULL $prev
     */
    public function __construct( string $service, int $code = 0, Throwable $prev = NULL )
    {
        parent::__construct( "Service not installed: $service", $code, $prev );
    }
}