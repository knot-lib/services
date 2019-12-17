<?php
declare(strict_types=1);

namespace KnotLib\Service\Exception;

use Throwable;

class ArrayNotFoundException extends ServicesException
{
    /**
     * StringNotFoundException constructor.
     *
     * @param string $array_uri
     * @param int $code
     * @param Throwable|null $prev
     */
    public function __construct( string $array_uri, int $code = 0, Throwable $prev = null )
    {
        parent::__construct("Array not found: {$array_uri}", $code, $prev);
    }
}

