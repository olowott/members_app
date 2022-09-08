<?php

namespace App\Filament\Resources\HduhauResource\Pages;

use App\Filament\Resources\HduhauResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHduhau extends EditRecord
{
    protected static string $resource = HduhauResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
