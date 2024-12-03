<?php

namespace App\services\simpleLogger\types;

use Illuminate\Support\Facades\Log;

class DBType implements Type
{

    /**
     * @param string $message
     * @return void
     */
    public function send(string $message):void
    {
        // Log to the DB
        dump($message);
        Log::info($message);
    }


    /**
     * @return string
     */
    public function getType(): string
    {
        return 'db';
    }
}
