<?php

namespace App\Filament\Resources\TeamFoundResource\Pages;

use App\Filament\Resources\TeamFoundResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTeamFounds extends ListRecords
{
    protected static string $resource = TeamFoundResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
