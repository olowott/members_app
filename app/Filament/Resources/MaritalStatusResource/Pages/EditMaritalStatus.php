<?php

namespace App\Filament\Resources\MaritalStatusResource\Pages;

use App\Filament\Resources\MaritalStatusResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMaritalStatus extends EditRecord
{
    protected static string $resource = MaritalStatusResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
