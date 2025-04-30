<?php

namespace App\Filament\Resources\BPHResource\Pages;

use App\Filament\Resources\BPHResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBPHS extends ListRecords
{
    protected static string $resource = BPHResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
