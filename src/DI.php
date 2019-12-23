<?php
declare(strict_types=1);

namespace KnotLib\Service;

use KnotLib\Service\Util\ComponentUriTrait;

class DI
{
    use ComponentUriTrait;

    //==============================
    // Scheme
    //==============================
    const SCHEME_COMPONENT        = 'component';
    const SCHEME_SERVICE          = 'service';
    const SCHEME_STRING           = 'string';
    const SCHEME_ARRAY            = 'array';

    //==============================
    // Object
    //==============================
    const OBJECT_REQUEST          = 'request';
    const OBJECT_RESPNSE          = 'response';
    const OBJECT_FILESYSTEM       = 'filesystem';
    const OBJECT_LOGGER           = 'logger';
    const OBJECT_VALIDATION       = 'validation';

    //==============================
    // Copmonents
    //==============================
    const URI_COMPONENT_REQUEST        = self::SCHEME_COMPONENT . '://' . self::OBJECT_REQUEST;     //=> component://request
    const URI_COMPONENT_RESPONSE       = self::SCHEME_COMPONENT . '://' . self::OBJECT_RESPNSE;     //=> component://response

    //==============================
    // Services
    //==============================
    const URI_SERVICE_FILESYSTEM       = self::SCHEME_SERVICE . '://' . self::OBJECT_FILESYSTEM;     //=> service://filesystem
    const URI_SERVICE_LOGGER           = self::SCHEME_SERVICE . '://' . self::OBJECT_LOGGER;         //=> service://logger
    const URI_SERVICE_VALIDATION       = self::SCHEME_SERVICE . '://' . self::OBJECT_VALIDATION;     //=> service://validation

}