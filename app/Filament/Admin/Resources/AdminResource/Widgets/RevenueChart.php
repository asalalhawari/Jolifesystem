<?php

namespace App\Filament\Admin\Resources\AdminResource\Widgets;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class RevenueChart extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                // ...
            )
            ->columns([
                // ...
            ]);
    }
}
