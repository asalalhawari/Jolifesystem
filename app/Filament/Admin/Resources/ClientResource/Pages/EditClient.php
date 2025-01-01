<?php

namespace App\Filament\Admin\Resources\ClientResource\Pages;

use App\Filament\Admin\Resources\ClientResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use ZeeshanTariq\FilamentAttachmate\Core\HandleAttachments;

class EditClient extends EditRecord
{
    use HandleAttachments;
    protected static string $resource = ClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
