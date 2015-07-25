<?php

namespace Linio\Exception;

use Psr\Log\LogLevel;

class MethodNotAllowedHttpException extends HttpException
{
    /**
     * @param string $message  Error message
     * @param int    $code     Internal code for the application error
     * @param string $logLevel Log level of the error, from Psr\Log\LogLevel
     * @param string $detail   Optional further details on the error
     */
    public function __construct($message, $code = 0, $logLevel = LogLevel::WARNING, $detail = null)
    {
        parent::__construct($message, 405, $code, $logLevel, $detail);
    }
}