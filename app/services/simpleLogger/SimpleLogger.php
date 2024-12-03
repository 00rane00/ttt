<?php

namespace App\services\simpleLogger;

use App\services\simpleLogger\types\Type;

class SimpleLogger implements LoggerInterface
{
    protected $logger;

    public function __construct()
    {
       $this->logger =  $this->build(config('services.simpleLogin.loggerTypeDefault'));
    }

    public function send(string $message): void
    {
        $this->logger->send($message);
    }

    public function sendByLogger(string $message, string $loggerType): void
    {
        $this->build($loggerType)->send($message);
    }

    public function getType(): string
    {
        return $this->logger->getType();
    }

    public function setType(string $type): void
    {
        $this->build($type);
    }

    private function build(string $type) : Type
    {
        if(is_null(config("services.simpleLogin.types.{$type}"))){
            throw new \Exception("Logger type '{$type}' not found");
        }
        return app()->make(config("services.simpleLogin.types.{$type}"));
    }
}
