<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\JadwalMengajarResource\Pages;
use App\Filament\Admin\Resources\JadwalMengajarResource\RelationManagers;
use App\Models\JadwalMengajar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JadwalMengajarResource extends Resource
{
    protected static ?string $model = JadwalMengajar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('guru_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('hari')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('mata_pelajaran')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kelas')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('waktu_mulai')
                    ->required(),
                Forms\Components\TextInput::make('waktu_selesai')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('guru_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('hari')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mata_pelajaran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kelas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('waktu_mulai'),
                Tables\Columns\TextColumn::make('waktu_selesai'),
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
            'index' => Pages\ListJadwalMengajars::route('/'),
            'create' => Pages\CreateJadwalMengajar::route('/create'),
            'edit' => Pages\EditJadwalMengajar::route('/{record}/edit'),
        ];
    }
}
