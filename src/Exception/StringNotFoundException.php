<?php
declare(strict_types=1);

namespace KnotLib\Service\Exception;

use Throwable;

class StringNotFoundException extends ServicesException
{
    /**
     * StringNotFoundException constructor.
     *
     * @param string $string_uri
     * @param int $code
     * @param Throwable|null $prev
     */
    public function __construct( string $string_uri, int $code = 0, Throwable $prev = null )
    {
        parent::__construct("String not found: {$string_uri}", $code, $prev);
    }
}

