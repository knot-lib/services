<?php
declare(strict_types=1);

namespace KnotLib\Service;

trait UriTrait
{
    /**
     * Returns uri
     *
     * @param string $uri
     * @param string $channel
     *
     * @return string
     */
    public static function uri(string $uri, string $channel) : string
    {
        return sprintf($uri, $channel);
    }
}