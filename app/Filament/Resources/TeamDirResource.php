<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamDirResource\Pages;
use App\Filament\Resources\TeamDirResource\RelationManagers;
use App\Models\TeamDir;
use App\Models\teamdirector;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Notifications\Collection;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;

class TeamDirResource extends Resource
{
    protected static ?string $model = teamdirector::class;

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
            Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
            Tables\Columns\ImageColumn::make('thumbnail'),
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime(),
        ])
        ->filters([
            //
        ])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make()->after(function(Collection $records){
                foreach($records as $key => $value){
                    if($value->thumbnail){
                        Storage::disk('public')->delete($value->thumbnail);
                    }
                }
            }),
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
            'index' => Pages\ListTeamDirs::route('/'),
            'create' => Pages\CreateTeamDir::route('/create'),
            'edit' => Pages\EditTeamDir::route('/{record}/edit'),
        ];
    }    
}
