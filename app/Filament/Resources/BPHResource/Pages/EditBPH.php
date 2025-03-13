<?php

namespace App\Filament\Resources\BPHResource\Pages;

use App\Filament\Resources\BPHResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBPH extends EditRecord
{
    protected static string $resource = BPHResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
