<?php

namespace Iseldore\DiscordAgenda;

use Iseldore\DiscordAgenda\Commands\DiscordAgendaCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DiscordAgendaServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('discord-agenda')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_discord_agenda_table')
            ->hasCommand(DiscordAgendaCommand::class);
    }
}
