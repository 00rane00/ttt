<?php

namespace App\services\simpleLogger\types;

interface Type
{
    /**
     * @param string $message
     * @return void
     */
    public function send(string $message): void;

    /**
     * @return string
     */
    public function getType(): string;
}
