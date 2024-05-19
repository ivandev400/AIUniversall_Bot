<?php

namespace App\Containers\Bot\Commands;

use Telegram\Bot\Commands\Command;

class StartCommand extends Command
{
    protected string $name = 'start';
    protected string $description = "This command starts the AIUniversall_Bot";

    public function handle()
    {
        $this->replyWithMessage([
            'text' => "Hi there! I'm AIUniversall_Bot.I can do such things:"
        ] );
    }
}