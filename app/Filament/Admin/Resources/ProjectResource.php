<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProjectResource\Pages;
use App\Filament\Admin\Resources\ProjectResource\RelationManagers\ServicesRelationManager;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;
    protected static ?string $pluralLabel = 'المشاريع';

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('project_name')
                    ->label('اسم المشروع')
                    ->required(),

                Forms\Components\Textarea::make('project_description')
                    ->label('وصف المشروع')
                    ->required(),

                Forms\Components\TextInput::make('contract_value')
                    ->label('قيمة العقد')
                    ->numeric()
                    ->required(),

                Forms\Components\Textarea::make('تفاصيل إضافية')
                    ->label('تفاصيل إضافية'),

                Select::make('client_id')
                    ->relationship('client', 'company_name')
                    ->label('اسم العميل'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('project_name')
                    ->label('اسم المشروع'),

                Tables\Columns\TextColumn::make('project_description')
                    ->label('وصف المشروع'),

                Tables\Columns\TextColumn::make('contract_value')
                    ->label('قيمة العقد'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('تعديل'),
                Tables\Actions\DeleteAction::make()
                    ->label('حذف'),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make()
                    ->label('حذف جماعي'),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            ServicesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
