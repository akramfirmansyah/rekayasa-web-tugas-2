<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function writeDataToRedis()
    {
        Redis::set('message', 'Hello World');
        return "Data successfully written to Redis!";
    }

    public function readDataFromRedis()
    {
        $message = Redis::get('message');
        return "The message from Redis is: " . $message;
    }
}
