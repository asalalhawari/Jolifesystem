<?php

namespace App\Filament\Admin\Resources\ClientResource\Pages;

use App\Filament\Admin\Resources\ClientResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use ZeeshanTariq\FilamentAttachmate\Core\HandleAttachments;

class CreateClient extends CreateRecord
{
    use HandleAttachments;
    protected static string $resource = ClientResource::class;
}
