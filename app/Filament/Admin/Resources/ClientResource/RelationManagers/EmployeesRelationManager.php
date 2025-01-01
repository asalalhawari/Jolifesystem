<?php

namespace App\Filament\Admin\Resources\ClientResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EmployeesRelationManager extends RelationManager
{
    protected static string $relationship = 'employees';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                ->label('الاسم')
                ->required(),

            TextInput::make('phone')
                ->label('رقم الهاتف')
                ->tel()
                ->required(),
                
            TextInput::make('address')
                ->label('العنوان')
                ->required(),
                
            Select::make('contract_type')
                ->label('طبيعة التعاقد')
                ->options([
                    'موظف' => 'موظف',
                    'استشاري' => 'استشاري',
                    'عمل حر' => 'عمل حر',
                ])
                ->required(),
                
            DatePicker::make('start_date')
                ->label('تاريخ المباشرة')
                ->required(),
                
            DatePicker::make('end_date')
                ->label('تاريخ الانفكاك'),
                
            TextInput::make('financial_dues')
                ->label('المستحقات المالية')
                ->numeric()
                ->required(),
                
                FileUpload::make('attachment')
                ->label('مستند مرفق')
                ->disk('public')
                ->directory('attachments'),

            
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('name')->label('الاسم')->searchable(),
                TextColumn::make('phone')->label('رقم الهاتف'),
                TextColumn::make('address')->label('العنوان'),
                TextColumn::make('contract_type')->label('طبيعة التعاقد'),
                TextColumn::make('start_date')->label('تاريخ المباشرة')->date(),
                TextColumn::make('end_date')->label('تاريخ الانفكاك')->date(),
                TextColumn::make('financial_dues')->label('المستحقات المالية'),
                TextColumn::make('attachment')->label('مستند مرفق'),
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
