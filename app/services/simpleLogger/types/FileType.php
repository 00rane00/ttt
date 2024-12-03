<?php

namespace App\services\simpleLogger\types;

use Illuminate\Support\Facades\Log;

class FileType implements Type
{
    public function send(string $message):void
    {
        // to file
        dump($message);
        Log::info($message);

    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return 'file';
    }
}
