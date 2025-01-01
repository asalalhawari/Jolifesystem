<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ClientResource\Pages;
use App\Filament\Admin\Resources\ClientResource\RelationManagers;
use App\Models\Client;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\BulkActionGroup;
use ZeeshanTariq\FilamentAttachmate\Forms\Components\AttachmentFileUpload as CustomAttachmentFileUpload;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;

    protected static ?string $navigationLabel = 'العملاء';
    protected static ?string $pluralLabel = 'قائمة العملاء';

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('client_name')
                    ->label('اسم العميل')
                    ->required()
                    ->afterStateUpdated(function ($state, $set) {
                        $set('job_title', null); 
                    }),

                Forms\Components\TextInput::make('job_title')
                    ->label('الوظيفة أو الصفة')
                    ->required(),

                Forms\Components\TextInput::make('company_name')
                    ->label('اسم الشركة')
                    ->required(),

                Forms\Components\TextInput::make('contact_person')
                    ->label('الشخص المسؤول')
                    ->required(),

                Forms\Components\TextInput::make('email')
                    ->label('البريد الإلكتروني')
                    ->email()
                    ->required(),

                Forms\Components\TextInput::make('phone')
                    ->label('رقم الهاتف')
                    ->required(),

                Forms\Components\TextInput::make('secondary_phone')
                    ->label('الهاتف الثانوي')
                    ->required()
                    ->tel(),

                Forms\Components\TextInput::make('authorized_person')
                    ->label('الشخص المفوض')
                    ->required(),

                Forms\Components\TextArea::make('address')
                    ->label('العنوان')
                    ->required(),

                CustomAttachmentFileUpload::make(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('client_name')
                    ->label('اسم العميل'),

                TextColumn::make('company_name')
                    ->label('اسم الشركة'),

                TextColumn::make('contact_person')
                    ->label('الشخص المسؤول'),

                TextColumn::make('email')
                    ->label('البريد الإلكتروني'),

                TextColumn::make('phone')
                    ->label('رقم الهاتف'),

                TextColumn::make('secondary_phone')
                    ->label('الهاتف الثانوي'),

                TextColumn::make('authorized_person')
                    ->label('الشخص المفوض'),

                TextColumn::make('job_title')
                    ->label('الوظيفة أو الصفة'),
            ])
            ->filters([])
            ->actions([ 
                
                EditAction::make()
                    ->label('تعديل')
                    ->icon('heroicon-o-pencil') 

            ])
            ->bulkActions([
                BulkActionGroup::make([
                    
                    DeleteBulkAction::make()
                        ->label('حذف جماعي')
                        ->icon('heroicon-o-trash') 
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ProjectsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }
}
