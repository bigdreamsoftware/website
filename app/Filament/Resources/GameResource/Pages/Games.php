<?php

namespace App\Filament\Resources\GameResource\Pages;

use App\Filament\Resources\GameResource;
use Filament\Resources\Pages\Page;

class Games extends Page
{
    protected static string $resource = GameResource::class;

    protected static string $view = 'filament.resources.game-resource.pages.games';

    public function mount(): void
    {
        static::authorizeResourceAccess();
    }
}
