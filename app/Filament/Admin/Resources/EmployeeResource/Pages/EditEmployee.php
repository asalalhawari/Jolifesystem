<?php

namespace App\Filament\Admin\Resources\EmployeeResource\Pages;

use App\Filament\Admin\Resources\EmployeeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use ZeeshanTariq\FilamentAttachmate\Core\HandleAttachments;

class EditEmployee extends EditRecord
{
    use HandleAttachments;

    protected static string $resource = EmployeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
