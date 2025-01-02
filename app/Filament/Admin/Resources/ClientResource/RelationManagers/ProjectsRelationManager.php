<?php

namespace App\Filament\Admin\Resources\ClientResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\BadgeColumn;
use Carbon\Carbon; // أضف هذا السطر

class ProjectsRelationManager extends RelationManager
{
    protected static string $relationship = 'projects';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('اسم المشروع')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('contract_value')
                    ->label('قيمة العقد')
                    ->numeric()
                    ->required(),

                    Textarea::make('project_description'),
                    
                    Forms\Components\DatePicker::make('start_date')
                    ->label('تاريخ بدء '),
                    Forms\Components\DatePicker::make('end_date')
                    ->label('تاريخ انتهاء '),
                    Textarea::make('additional_details'),
                
         
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('name')
                    ->label('اسم المشروع')
                    ->searchable(),
                TextColumn::make('contract_value')
                    ->label('قيمة العقد')
                    ->sortable()
                    ->money('USD'),
               
                TextColumn::make('start_date')
                    ->label('تاريخ بدء ')
                    ->dateTime('Y-m-d')
                    ->sortable(),
                TextColumn::make('end_date')
                    ->label('تاريخ انتهاء ')
                    ->dateTime('Y-m-d')
                    ->sortable(),
        
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('contract_value')
                    ->options([
                        '0-500' => 'من 0 إلى 500',
                        '501-1000' => 'من 501 إلى 1000',
                        '1001-5000' => 'من 1001 إلى 5000',
                    ])
                    ->label('فلتر قيمة العقد'),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
