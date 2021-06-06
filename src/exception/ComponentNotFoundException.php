<?php
declare(strict_types=1);

namespace knotlib\services\exception;

use Throwable;

class ComponentNotFoundException extends ServicesException
{
    /**
     * ComponentNotFoundException constructor.
     *
     * @param string $component_uri
     * @param Throwable|NULL $prev
     */
    public function __construct( string $component_uri, Throwable $prev = NULL )
    {
        parent::__construct( "Component not installed: $component_uri", $prev );
    }
}