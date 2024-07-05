<?php

namespace App\Filament\Resources\RodadoResource\Pages;

use App\Filament\Resources\RodadoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRodado extends EditRecord
{
    protected static string $resource = RodadoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
