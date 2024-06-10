<?php

namespace App\Containers\Bot\Controllers;

use App\Http\Controllers\Controller;
use Telegram\Bot\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
    public function handleWebhook(Request $request)
    {
        $update = $request->all();

        $message = $update['message'];
        $chatId = $message['chat']['id'];
        $text = $message['text']; 

        $this->sendMessage($chatId, $text);

        return response('OK', 200);
    }
    private function sendMessage($chatId, $text)
    {
        $tgApiUrl = "https://api.telegram.org/bot" . env('TELEGRAM_BOT_TOKEN') . "/sendMessage";

        $response = Http::post($tgApiUrl, [
            'chat_id' => $chatId,
            'text' => $text
        ]);

        return $response->body();
    }
}
