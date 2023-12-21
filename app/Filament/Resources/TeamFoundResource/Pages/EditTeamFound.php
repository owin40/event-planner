<?php

namespace App\Filament\Resources\TeamFoundResource\Pages;

use App\Filament\Resources\TeamFoundResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeamFound extends EditRecord
{
    protected static string $resource = TeamFoundResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
