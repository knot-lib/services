<?php
declare(strict_types=1);

namespace knotlib\service\exception;

use knotlib\exception\KnotPhpExceptionInterface;
use knotlib\exception\runtime\RuntimeExceptionInterface;

interface ServicesExceptionInterface extends KnotPhpExceptionInterface, RuntimeExceptionInterface
{
}