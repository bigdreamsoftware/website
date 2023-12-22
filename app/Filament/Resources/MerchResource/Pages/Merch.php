<?php

namespace App\Filament\Resources\MerchResource\Pages;

use App\Filament\Resources\MerchResource;
use Filament\Resources\Pages\Page;

class Merch extends Page
{
    protected static string $resource = MerchResource::class;

    protected static string $view = 'filament.resources.merch-resource.pages.merch';

    public function mount(): void
    {
        static::authorizeResourceAccess();
    }
}
