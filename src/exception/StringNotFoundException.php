<?php
declare(strict_types=1);

namespace knotlib\service\exception;

use Throwable;

class StringNotFoundException extends ServicesException
{
    /**
     * StringNotFoundException constructor.
     *
     * @param string $string_uri
     * @param Throwable|null $prev
     */
    public function __construct( string $string_uri, Throwable $prev = null )
    {
        parent::__construct("String not found: {$string_uri}", $prev);
    }
}

