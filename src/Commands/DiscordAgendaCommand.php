<?php

namespace Iseldore\DiscordAgenda\Commands;

use Illuminate\Console\Command;

class DiscordAgendaCommand extends Command
{
    public $signature = 'discord-agenda';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
