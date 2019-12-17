<?php
declare(strict_types=1);

namespace KnotLib\Service\Exception;

use Throwable;

class ArrayTypeException extends ServicesException
{
    /**
     * ArrayTypeException constructor.
     *
     * @param string $array_uri
     * @param string $actual_type
     * @param int $code
     * @param Throwable|null $prev
     */
    public function __construct( string $array_uri, string $actual_type, int $code = 0, Throwable $prev = null )
    {
        parent::__construct("Returned not array type: {$array_uri}, actual={$actual_type}", $code, $prev);
    }
}

