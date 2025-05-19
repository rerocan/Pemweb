<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\RiwayatPendidikanResource\Pages;
use App\Filament\Admin\Resources\RiwayatPendidikanResource\RelationManagers;
use App\Models\RiwayatPendidikan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RiwayatPendidikanResource extends Resource
{
    protected static ?string $model = RiwayatPendidikan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('guru_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jenjang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nama_institusi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tahun_kelulusan')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('guru_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenjang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_institusi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun_kelulusan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListRiwayatPendidikans::route('/'),
            'create' => Pages\CreateRiwayatPendidikan::route('/create'),
            'edit' => Pages\EditRiwayatPendidikan::route('/{record}/edit'),
        ];
    }
}
