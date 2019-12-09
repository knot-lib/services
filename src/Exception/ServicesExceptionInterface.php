<?php
declare(strict_types=1);

namespace KnotLib\Service\Exception;

use KnotLib\Exception\KnotPhpExceptionInterface;
use KnotLib\Exception\Runtime\RuntimeExceptionInterface;

interface ServicesExceptionInterface extends KnotPhpExceptionInterface, RuntimeExceptionInterface
{
}