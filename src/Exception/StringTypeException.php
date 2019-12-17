<?php
declare(strict_types=1);

namespace KnotLib\Service\Exception;

use Throwable;

class StringTypeException extends ServicesException
{
    /**
     * StringTypeException constructor.
     *
     * @param string $string_uri
     * @param string $actual_type
     * @param int $code
     * @param Throwable|null $prev
     */
    public function __construct( string $string_uri, string $actual_type, int $code = 0, Throwable $prev = null )
    {
        parent::__construct("Returned not string type: {$string_uri}, actual={$actual_type}", $code, $prev);
    }
}

