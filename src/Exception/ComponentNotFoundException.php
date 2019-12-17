<?php
declare(strict_types=1);

namespace KnotLib\Service\Exception;

use Throwable;

class ComponentNotFoundException extends ServicesException
{
    /**
     * ComponentNotFoundException constructor.
     *
     * @param string $component_uri
     * @param int $code
     * @param Throwable|NULL $prev
     */
    public function __construct( string $component_uri, int $code = 0, Throwable $prev = NULL )
    {
        parent::__construct( "Component not installed: $component_uri", $code, $prev );
    }
}