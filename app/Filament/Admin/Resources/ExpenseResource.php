<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ExpenseResource\Pages;
use App\Models\Expense;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ExpenseResource extends Resource
{
    protected static ?string $model = Expense::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    protected static ?string $navigationLabel = 'المصاريف';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('expense_type') 
                    ->label(' المصروف') 
                    ->required() 
                    ->placeholder('المصاريف'),
                Forms\Components\TextInput::make('amount')
                    ->required()
                    ->label('القيمة'),
                Forms\Components\TextArea::make('notes')
                    ->label('الملاحظات'),
                Forms\Components\FileUpload::make('attachment')
                    ->label('المرفقات')
                    ->disk('public')
                    ->directory('attachments'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('expense_type')  
                    ->label('نوع المصروف')
                    ->sortable(),
                Tables\Columns\TextColumn::make('amount')
                    ->label('القيمة')
                    ->sortable(),
                Tables\Columns\TextColumn::make('notes')
                    ->label('الملاحظات')
                    ->limit(50),
            ])
            ->filters([ 
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->label('تعديل'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([ 
                    Tables\Actions\DeleteBulkAction::make()->label('حذف'),
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
            'index' => Pages\ListExpenses::route('/'),
            'create' => Pages\CreateExpense::route('/create'),
            'edit' => Pages\EditExpense::route('/{record}/edit'),
        ];
    }
}
