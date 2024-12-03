<?php

namespace App\services\simpleLogger\types;

use Illuminate\Support\Facades\Log;

class MailType implements Type
{
    /**
     * @param string $message
     * @return void
     */
    public function send(string $message):void
    {
//        Send Email
        dump($message);
        Log::info($message);

    }


    /**
     * @return string
     */
    public function getType(): string
    {
        return 'mail';
    }
}
