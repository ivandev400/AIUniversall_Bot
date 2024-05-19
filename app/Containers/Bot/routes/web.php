<?php

use Illuminate\Support\Facades\Route;
use Telegram\Bot\Laravel\Facades\Telegram;

Route::post('/{token}/webhook', function () {

    $update = Telegram::commandsHandler(true);

    return 'ok';
} );
Route::get('/set-webhook', function(){
    $response = Telegram::setWebhook(
        ['url' => 'http://127.0.0.1:8000/' . env('TELEGRAM_BOT_TOKEN') . '/webhook']);
} );