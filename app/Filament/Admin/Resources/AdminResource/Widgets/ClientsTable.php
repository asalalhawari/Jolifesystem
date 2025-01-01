<?php

namespace App\Filament\Widgets;

use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables;

class ClientsTable extends BaseWidget
{
    protected function getTableQuery(): Builder
    {
        return \App\Models\Client::query(); // استعلام جلب العملاء
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id')->label('ID'),
            Tables\Columns\TextColumn::make('name')->label('Name'),
            Tables\Columns\TextColumn::make('email')->label('Email'),
            Tables\Columns\BadgeColumn::make('status')
                ->label('Status')
                ->colors(['success' => 'active', 'danger' => 'inactive']),
        ];
    }
}
