<?php

namespace App\Http\Controllers;

use App\services\simpleLogger\LoggerInterface;
use App\services\simpleLogger\SimpleLogger;

class TestController extends Controller
{

    protected $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function index(){
        try {
            $this->logger->send('test default');

            $this->logger->sendByLogger('test to file', 'file');

            $this->logger->sendByLogger('test to mail', 'mail');

            $this->logger->sendByLogger('test to db', 'db');

            $this->logger->sendByLogger('test to SIMPLE', 'SIMPLE');
        }catch (\Exception $e){
            echo $e->getMessage();
        }
    }
}
