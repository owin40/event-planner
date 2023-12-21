<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamFoundResource\Pages;
use App\Filament\Resources\TeamFoundResource\RelationManagers;
use App\Models\TeamFound;
use App\Models\teamfounder;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamFoundResource extends Resource
{
    protected static ?string $model = teamfounder::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            
            Card::make()->schema([
            Forms\Components\TextInput::make('title')
                ->required()
                ->maxLength(255),
            Forms\Components\FileUpload::make('thumbnail')
                ->required()->image()->disk('public'),
            Forms\Components\RichEditor::make('content')
                ->required(),
            ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTeamFounds::route('/'),
            'create' => Pages\CreateTeamFound::route('/create'),
            'edit' => Pages\EditTeamFound::route('/{record}/edit'),
        ];
    }    
}
