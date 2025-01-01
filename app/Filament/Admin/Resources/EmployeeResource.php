<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\EmployeeProjectRelationManagerResource\RelationManagers\ProjectsRelationManager;
use App\Filament\Resources\EmployeeResource\RelationManagers\EmployeeContractRelationManager;
use Filament\Resources\RelationManagers\RelationManager;
use App\Filament\Resources\EmployeeResource\RelationManagers\ContractsRelationManager;
use App\Filament\Resources\EmployeeResource\RelationManagers\EmployeeProjectRelationManager;
use App\Filament\Admin\Resources\EmployeeResource\Pages;
use App\Models\Employee;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;
    protected static ?string $pluralLabel = 'موظفين';
    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form->schema([  
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

            // استبدال Select بـ TextInput
            TextInput::make('contract_type')
                ->label('طبيعة التعاقد')
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

            FileUpload::make('identity_attachment')
                ->label(' الهوية الشخصية')
                ->disk('public')
                ->directory('identity_documents') 
                ->required(),

            FileUpload::make('attachment')
                ->label('مستند مرفق')
                ->disk('public')
                ->directory('attachments')
                ->required(),

            TextInput::make('national_id')
                ->label('الرقم الوطني')
                ->required()
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('الاسم')->searchable(),
                TextColumn::make('phone')->label('رقم الهاتف'),
                TextColumn::make('address')->label('العنوان'),
                TextColumn::make('contract_type')->label('طبيعة التعاقد'),
                TextColumn::make('start_date')->label('تاريخ المباشرة')->date(),
                TextColumn::make('end_date')->label('تاريخ الانفكاك')->date(),
                TextColumn::make('financial_dues')->label('المستحقات المالية'),
            ])
            ->filters([])
            ->actions([
                EditAction::make()
                    ->label('تعديل')
                    ->icon('heroicon-o-pencil')
                    ->color('success'),

                DeleteAction::make()
                    ->label('حذف')
                    ->icon('heroicon-o-trash')
                    ->color('danger'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()
                    ->label('حذف محدد')
                    ->icon('heroicon-o-trash'),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            ProjectsRelationManager::class,
            ContractsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }
}
