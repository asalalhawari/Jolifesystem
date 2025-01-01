<?php

namespace App\Filament\Admin\Resources\EmployeeProjectRelationManagerResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class ProjectsRelationManager extends RelationManager
{
    protected static string $relationship = 'projects';

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->label('اسم المشروع') 
                ->required(), 
            Forms\Components\TextInput::make('description')
                ->label('الوصف') 
                ->maxLength(255), 
        ]);
    }

    // تصميم الجدول (Table)
    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name') 
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('اسم المشروع')
                    ->sortable(), 
                Tables\Columns\TextColumn::make('description')
                    ->label('الوصف')
                    ->limit(50), 
            ])
            ->filters([
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
