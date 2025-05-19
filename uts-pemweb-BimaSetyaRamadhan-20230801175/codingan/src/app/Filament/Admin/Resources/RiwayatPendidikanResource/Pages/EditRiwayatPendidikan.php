<?php

namespace App\Filament\Admin\Resources\RiwayatPendidikanResource\Pages;

use App\Filament\Admin\Resources\RiwayatPendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRiwayatPendidikan extends EditRecord
{
    protected static string $resource = RiwayatPendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
