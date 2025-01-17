<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LandingpageResource\Pages;
use App\Filament\Resources\LandingpageResource\RelationManagers;
use App\Models\Landingpage;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LandingpageResource extends Resource
{
    protected static ?string $model = Landingpage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required(),
                FileUpload::make('picture')
                    ->label('Upload Gambar')
                    ->image()
                    ->required(),
                Forms\Components\Select::make('content')
                ->options([
                    'ujang mulyadi' => 'ujang mulyadi',
                    'adil rahmat' => 'adil rahmat'
                ])
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('content')->searchable()->sortable(),
                Tables\Columns\ImageColumn::make('picture')->searchable()->sortable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListLandingpages::route('/'),
            'create' => Pages\CreateLandingpage::route('/create'),
            'edit' => Pages\EditLandingpage::route('/{record}/edit'),
        ];
    }
}
