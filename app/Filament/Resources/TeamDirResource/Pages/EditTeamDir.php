<?php

namespace App\Filament\Resources\TeamDirResource\Pages;

use App\Filament\Resources\TeamDirResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeamDir extends EditRecord
{
    protected static string $resource = TeamDirResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
