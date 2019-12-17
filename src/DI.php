<?php
declare(strict_types=1);

namespace KnotLib\Service;

final class DI
{
    //==============================
    // Copmonents
    //==============================
    const URI_COMPONENT_REQUEST        = 'component://request';
    const URI_COMPONENT_RESPONSE       = 'component://response';

    //==============================
    // Services
    //==============================
    const URI_SERVICE_FILESYSTEM       = 'service://filesystem';
    const URI_SERVICE_LOGGER           = 'service://logger';
    const URI_SERVICE_VALIDATION       = 'service://validation';

}