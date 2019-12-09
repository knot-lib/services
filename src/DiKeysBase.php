<?php
declare(strict_types=1);

namespace KnotLib\Service;

abstract class DiKeysBase
{
    protected const PREFIX_FRAMEWORK     = 'calgamo.framework.';
    protected const PREFIX_SERVICES      = self::PREFIX_FRAMEWORK . 'services.';
    protected const PREFIX_COMPONENTS    = self::PREFIX_FRAMEWORK . 'components.';
    protected const PREFIX_STRINGS       = self::PREFIX_FRAMEWORK . 'strings.';
    protected const PREFIX_ARRAYS        = self::PREFIX_FRAMEWORK . 'arrays.';
}