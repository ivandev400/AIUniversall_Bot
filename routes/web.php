<?php

use Illuminate\Support\Facades\Route;
use App\Containers\Bot\Controllers\BotController;

Route::get('/', [BotController::class, 'show']);
Route::post('/webhook', [BotController::class, 'handleWebhook']);
