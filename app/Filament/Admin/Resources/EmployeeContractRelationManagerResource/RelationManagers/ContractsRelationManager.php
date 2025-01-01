<?php

namespace App\Filament\Resources\EmployeeResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class ContractsRelationManager extends RelationManager
{
    protected static string $relationship = 'contracts';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('type')
                    ->label('نوع العقد')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('start_date')
                    ->label('تاريخ البداية')
                    ->required(),
                Forms\Components\DatePicker::make('end_date')
                    ->label('تاريخ النهاية'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('type')
            ->columns([
                Tables\Columns\TextColumn::make('type')->label('نوع العقد'),
                Tables\Columns\TextColumn::make('start_date')->label('تاريخ البداية')->date(),
                Tables\Columns\TextColumn::make('end_date')->label('تاريخ النهاية')->date(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
