<?php

namespace App\Containers\Bot\Controllers;

use App\Http\Controllers\Controller;
use Telegram\Bot\Api;

class BotController extends Controller
{
    protected $telegram; 
    
    public function __construct(Api $telegram)
    {
        $this->telegram = $telegram;
    }

    /**
     * Show the bot information.
     */
    public function show()
    {
        $response = $this->telegram->getMe();

        return $response;
    }
}
