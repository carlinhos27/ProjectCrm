<?php

namespace App\Filament\Resources\RodadoResource\Pages;

use App\Filament\Resources\RodadoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRodados extends ListRecords
{
    protected static string $resource = RodadoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
