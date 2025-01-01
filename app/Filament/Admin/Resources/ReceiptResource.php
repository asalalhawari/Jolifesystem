<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ReceiptResource\Pages;
use App\Filament\Admin\Resources\ReceiptResource\RelationManagers;
use App\Models\Receipt;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\Company;


class ReceiptResource extends Resource
{
    protected static ?string $model = Receipt::class;
    protected static ?string $pluralLabel = 'التقارير';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('company_id')
                ->label('الشركة')
                ->options(
                    Company::all()->pluck('name', 'id')->toArray()
                )
                ->required()
                ->searchable(), // أضف هذا الخيار للبحث داخل القائمة
            Forms\Components\Select::make('expense_type')
                ->options([
                    'salary' => 'رواتب',
                    'service' => 'خدمات',
                    'materials' => 'مواد',
                ])
                ->required()->label('نوع الصرف'),
            Forms\Components\TextInput::make('amount')->required()->label('القيمة'),
            Forms\Components\TextArea::make('notes')->label('الملاحظات'),
            Forms\Components\FileUpload::make('attachment')
                ->label('مستند مرفق')
                ->disk('public')
                ->directory('attachments'),
        ]);
}
        
            
    

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('company.name') 
                ->label('الشركة')
                ->searchable(), 
            Tables\Columns\TextColumn::make('expense_type')
                ->label('نوع الصرف')
                ->searchable(),
            Tables\Columns\TextColumn::make('amount')
                ->label('القيمة'),
            Tables\Columns\TextColumn::make('notes')
                ->label('الملاحظات')
                ->limit(50), 
            Tables\Columns\TextColumn::make('created_at')
                ->label('تاريخ الإنشاء')
                ->dateTime(), 
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListReceipts::route('/'),
            'create' => Pages\CreateReceipt::route('/create'),
            'edit' => Pages\EditReceipt::route('/{record}/edit'),
        ];
    }
}
