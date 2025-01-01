<?php

namespace App\Filament\Admin\Resources\ClientResource\RelationManagers;

use Filament\Forms;
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
                Forms\Components\TextInput::make('domain_name')
                    ->label('اسم النطاق')
                    ->maxLength(255),
                Forms\Components\DatePicker::make('domain_start_date')
                    ->label('تاريخ بدء النطاق'),
                Forms\Components\DatePicker::make('domain_end_date')
                    ->label('تاريخ انتهاء النطاق'),
                Forms\Components\Checkbox::make('hosting_reserved_by_us')
                    ->label('هل تم حجز الاستضافة من قبلنا؟')
                    ->default(false),
                Forms\Components\Select::make('contract_type')
                    ->label('نوع العقد')
                    ->options([
                        'domain' => 'نطاق',
                        'hosting' => 'استضافة',
                        'full' => 'كامل',
                    ])
                    ->default('domain'),
                Forms\Components\Checkbox::make('has_maintenance_contract')
                    ->label('هل يوجد عقد صيانة؟')
                    ->default(false),
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
                TextColumn::make('domain_name')
                    ->label('اسم النطاق'),
                TextColumn::make('domain_start_date')
                    ->label('تاريخ بدء النطاق')
                    ->dateTime('Y-m-d')
                    ->sortable(),
                TextColumn::make('domain_end_date')
                    ->label('تاريخ انتهاء النطاق')
                    ->dateTime('Y-m-d')
                    ->sortable(),
                TextColumn::make('contract_type')
                    ->label('نوع العقد'),
                BadgeColumn::make('has_maintenance_contract')
                    ->label('حالة عقد الصيانة')
                    ->getStateUsing(fn ($record) => $record->has_maintenance_contract ? 'يوجد عقد صيانة' : 'لا يوجد عقد صيانة')
                    ->colors([
                        'success' => fn ($record) => $record->has_maintenance_contract,
                        'danger' => fn ($record) => !$record->has_maintenance_contract,
                    ]),
                BadgeColumn::make('is_late')
                    ->label('حالة الملف')
                    ->getStateUsing(function ($record) {
                        if ($record->domain_end_date === null) {
                            return 'غير محدد'; // في حالة عدم وجود تاريخ انتهاء
                        }

                        return now()->greaterThan(Carbon::parse($record->domain_end_date)) ? 'متأخر' : 'غير متأخر';
                    })
                    ->colors([
                        'danger' => fn ($record) => $record->domain_end_date && now()->greaterThan(Carbon::parse($record->domain_end_date)),
                        'success' => fn ($record) => $record->domain_end_date && !now()->greaterThan(Carbon::parse($record->domain_end_date)),
                        'secondary' => fn ($record) => $record->domain_end_date === null, // لون لحالة "غير محدد"
                    ]),
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
