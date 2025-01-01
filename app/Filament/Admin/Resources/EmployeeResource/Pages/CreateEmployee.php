<?php

namespace App\Filament\Admin\Resources\EmployeeResource\Pages;

use App\Filament\Admin\Resources\EmployeeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use ZeeshanTariq\FilamentAttachmate\Core\HandleAttachments;

class CreateEmployee extends CreateRecord
{
    use HandleAttachments;
    protected static string $resource = EmployeeResource::class;
}
