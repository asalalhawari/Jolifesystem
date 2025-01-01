<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $label = 'خدمة'; 
    protected static ?string $pluralLabel = 'الخدمات'; 
    protected static ?string $navigationLabel = 'الخدمات'; 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('اسم الخدمة')
                    ->required()
                    ->maxLength(255),
                Select::make('hosted_by_us')
                    ->label('مستضاف بواسطة النظام')
                    ->options([
                        0 => 'لا',
                        1 => 'نعم',
                    ])
                    ->default(0),
                TextInput::make('host_name')
                    ->label('اسم المستضيف')
                    ->nullable()
                    ->maxLength(255),
                Textarea::make('description')
                    ->label('وصف الخدمة')
                    ->nullable(),
                TextInput::make('login')
                    ->label('بيانات تسجيل الدخول')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('اسم الخدمة')
                    ->searchable()
                    ->sortable(),
                BooleanColumn::make('hosted_by_us')
                    ->label('مستضاف بواسطة النظام')
                    ->sortable(),
                TextColumn::make('host_name')
                    ->label('اسم المستضيف'),
                TextColumn::make('description')
                    ->label('وصف الخدمة')
                    ->limit(50),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('hosted_by_us')
                    ->label('مستضاف بواسطة النظام')
                    ->options([
                        0 => 'لا',
                        1 => 'نعم',
                    ])
                    ->default(0),
            ])
            ->actions([
                EditAction::make()
                    ->label('تعديل'),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->label('حذف'),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // تعريف أي علاقات عند الحاجة
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
