<?php
declare(strict_types=1);

namespace knotlib\service\exception;

use Throwable;

class ArrayNotFoundException extends ServicesException
{
    /**
     * StringNotFoundException constructor.
     *
     * @param string $array_uri
     * @param Throwable|null $prev
     */
    public function __construct( string $array_uri, Throwable $prev = null )
    {
        parent::__construct("Array not found: $array_uri", $prev);
    }
}

