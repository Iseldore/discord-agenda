<?php

namespace Iseldore\DiscordAgenda\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Iseldore\DiscordAgenda\DiscordAgenda
 */
class DiscordAgenda extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Iseldore\DiscordAgenda\DiscordAgenda::class;
    }
}
