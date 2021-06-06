<?php
declare(strict_types=1);

namespace knotlib\service;

class DI
{
    //==============================
    // Scheme
    //==============================
    const SCHEME_COMPONENT        = 'component://';
    const SCHEME_SERVICE          = 'service://';
    const SCHEME_STRING           = 'string://';
    const SCHEME_ARRAY            = 'array://';

    //==============================
    // Object
    //==============================
    const REQUEST          = 'request';
    const RESPNSE          = 'response';
    const FILESYSTEM       = 'filesystem';
    const LOGGER           = 'logger';
    const VALIDATION       = 'validation';

    //==============================
    // Copmonents
    //==============================
    const URI_COMPONENT_REQUEST        = self::SCHEME_COMPONENT . self::REQUEST;     //=> component://request
    const URI_COMPONENT_RESPONSE       = self::SCHEME_COMPONENT . self::RESPNSE;     //=> component://response

    //==============================
    // Services
    //==============================
    const URI_SERVICE_FILESYSTEM       = self::SCHEME_SERVICE . self::FILESYSTEM;     //=> service://filesystem
    const URI_SERVICE_LOGGER           = self::SCHEME_SERVICE . self::LOGGER;         //=> service://logger
    const URI_SERVICE_VALIDATION       = self::SCHEME_SERVICE . self::VALIDATION;     //=> service://validation

}