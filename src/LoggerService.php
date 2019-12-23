<?php
declare(strict_types=1);

namespace KnotLib\Service;

use Throwable;

use KnotLib\Kernel\Logger\Channels;
use KnotLib\Kernel\Logger\LoggerUtil;
use KnotLib\Kernel\Logger\LoggerChannelInterface;
use KnotLib\Kernel\Logger\LoggerInterface;
use KnotLib\Kernel\Logger\LoggerTrait;

final class LoggerService
{
    use LoggerTrait;

    /** @var LoggerInterface */
    private $logger;

    /** @var string */
    private $channel_id;

    /**
     * LoggerService constructor.
     *
     * @param LoggerInterface $logger
     * @param string $channel_id
     */
    public function __construct(LoggerInterface $logger, string $channel_id = Channels::DEFAULT)
    {
        $this->logger = $logger;
        $this->channel_id = $channel_id;
    }
    /**
     * Get logger
     *
     * @return LoggerInterface
     */
    public function getLogger() : LoggerInterface
    {
        return $this->logger;
    }

    /**
     * Get logger
     *
     * @return LoggerChannelInterface
     */
    public function getChannelLogger() : LoggerChannelInterface
    {
        return $this->logger->channel($this->channel_id);
    }

    /**
     * Get channel id
     *
     * @return string
     */
    public function getChannelId() : string
    {
        return $this->channel_id;
    }

    /**
     * Set channel id
     *
     * @param string $channel_id
     */
    public function setChannelId(string $channel_id)
    {
        $this->channel_id = $channel_id;
    }

    /**
     * Log exception
     *
     * @param Throwable $e
     */
    public function logException(Throwable $e)
    {
        LoggerUtil::logException($e, $this->logger);
    }
}