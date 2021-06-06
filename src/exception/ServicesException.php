<?php
declare(strict_types=1);

namespace knotlib\service\exception;

use Throwable;

use knotlib\exception\KnotPhpException;

class ServicesException extends KnotPhpException implements ServicesExceptionInterface
{
    /**
     * ServicesException constructor.
     *
     * @param string $message
     * @param Throwable|NULL $prev
     */
    public function __construct(string $message, Throwable $prev = NULL)
    {
        parent::__construct($message, 0, $prev);
    }
}