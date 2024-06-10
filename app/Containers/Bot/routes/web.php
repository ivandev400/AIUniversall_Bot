<?php

use Illuminate\Support\Facades\Route;
use App\Containers\Bot\Controllers\BotController;

Route::post('/webhook', [BotController::class, 'handleWebhook']);