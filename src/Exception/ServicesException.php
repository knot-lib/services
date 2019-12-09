<?php
declare(strict_types=1);

namespace KnotLib\Service\Exception;

use Throwable;

use KnotLib\Exception\KnotPhpException;

class ServicesException extends KnotPhpException implements ServicesExceptionInterface
{
    /**
     * FormInputException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|NULL $prev
     */
    public function __construct(string $message, int $code = 0, Throwable $prev = NULL)
    {
        parent::__construct($message, $code, $prev);
    }
}