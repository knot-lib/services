<?php
declare(strict_types=1);

namespace KnotLib\Service\Util;

trait ComponentUriTrait
{
    /**
     * Make component uri
     *
     * @param string $scheme
     * @param string $object
     * @param string $channel
     *
     * @return string
     */
    public static function uri(string $scheme, string $object, string $channel = null) : string
    {
        return $channel ? "{$scheme}://{$object}:$channel" : "{$scheme}://{$object}";
    }
}