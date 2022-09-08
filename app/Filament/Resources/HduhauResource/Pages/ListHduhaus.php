<?php

namespace App\Filament\Resources\HduhauResource\Pages;

use App\Filament\Resources\HduhauResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHduhaus extends ListRecords
{
    protected static string $resource = HduhauResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
