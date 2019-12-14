<?php
declare(strict_types=1);

namespace KnotLib\Service;

class DI extends DiKeysBase
{
    //=====================================
    // Component
    //=====================================

    /* Component Prefix */
    const COMPONENT                       = self::PREFIX_COMPONENTS;

    /* PSR-7 Server Request Object */
    const COMPONENT_REQUEST               = self::PREFIX_COMPONENTS . 'request';

    /* PSR-7 Response Object */
    const COMPONENT_RESPONSE              = self::PREFIX_COMPONENTS . 'response';

    //====================================
    // Arrays
    //====================================

    /* Arrays Prefix */
    const ARRAYS                          = self::PREFIX_ARRAYS;

    //====================================
    // Strings
    //====================================

    /* Arrays Prefix */
    const STRINGS                          = self::PREFIX_STRINGS;

    //=====================================
    // Service
    //=====================================

    /* Service Prefix */
    const SERVICE                         = self::PREFIX_SERVICES;

    /* File System Service */
    const SERVICE_FILESYSTEM              = self::PREFIX_SERVICES . 'filesystem';

    /* Logger Service */
    const SERVICE_LOGGER                  = self::PREFIX_SERVICES . 'logger';

    /* Validation Service */
    const SERVICE_VALIDATION              = self::PREFIX_SERVICES . 'validation';
}