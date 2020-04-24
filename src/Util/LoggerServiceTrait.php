<?php
declare(strict_types=1);

namespace KnotLib\Service\Util;

use KnotLib\Service\LoggerService;
use Stk2k\Util\Util;

trait LoggerServiceTrait
{
    /**
     * Returns logger service
     *
     * @return LoggerService
     */
    public abstract function getLoggerService() : LoggerService;

    /**
     * write alert log
     *
     * @param string $message
     */
    public function emergency(string $message)
    {
        list($file, $line) = Util::caller(1);
        $context = [
            'file' => $file,
            'line' => $line,
        ];
        $this->getLoggerService()->emergency($message, $context);
    }

    /**
     * write alert log
     *
     * @param string $message
     */
    public function alert(string $message)
    {
        list($file, $line) = Util::caller(1);
        $context = [
            'file' => $file,
            'line' => $line,
        ];
        $this->getLoggerService()->alert($message, $context);
    }

    /**
     * write critical log
     *
     * @param string $message
     */
    public function critical(string $message)
    {
        list($file, $line) = Util::caller(1);
        $context = [
            'file' => $file,
            'line' => $line,
        ];
        $this->getLoggerService()->critical($message, $context);
    }

    /**
     * write error log
     *
     * @param string $message
     */
    public function error(string $message)
    {
        list($file, $line) = Util::caller(1);
        $context = [
            'file' => $file,
            'line' => $line,
        ];
        $this->getLoggerService()->error($message, $context);
    }

    /**
     * write warning log
     *
     * @param string $message
     */
    public function warning(string $message)
    {
        list($file, $line) = Util::caller(1);
        $context = [
            'file' => $file,
            'line' => $line,
        ];
        $this->getLoggerService()->warning($message, $context);
    }

    /**
     * write notice log
     *
     * @param string $message
     */
    public function notice(string $message)
    {
        list($file, $line) = Util::caller(1);
        $context = [
            'file' => $file,
            'line' => $line,
        ];
        $this->getLoggerService()->notice($message, $context);
    }

    /**
     * write info log
     *
     * @param string $message
     */
    public function info(string $message)
    {
        list($file, $line) = Util::caller(1);
        $context = [
            'file' => $file,
            'line' => $line,
        ];
        $this->getLoggerService()->info($message, $context);
    }

    /**
     * write debug log
     *
     * @param string $message
     */
    public function debug(string $message)
    {
        list($file, $line) = Util::caller(1);
        $context = [
            'file' => $file,
            'line' => $line,
        ];
        $this->getLoggerService()->debug($message, $context);
    }


}