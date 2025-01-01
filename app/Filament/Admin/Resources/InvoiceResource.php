<?php
namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\InvoiceResource\Pages;
use App\Models\Invoice;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Notifications\Notification;

class InvoiceResource extends Resource
{
    protected static ?string $model = Invoice::class;
    protected static ?string $pluralLabel = 'الفواتير';
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('invoice_number')
                    ->required()
                    ->label('رقم الفاتورة'),
                
                Forms\Components\Select::make('client_id')
                    ->relationship('client', 'company_name')
                    ->required()
                    ->label('اسم العميل'),
                
                Forms\Components\TextInput::make('amount')
                    ->required()
                    ->label('قيمة الفاتورة')
                    ->numeric() // للتحقق من أن القيمة رقمية
                    ->placeholder('أدخل قيمة رقمية فقط')
                    ->rule('numeric') // قاعدة التحقق
                    ->afterStateUpdated(function ($state, $set) {
                        if (!is_numeric($state)) {
                            Notification::make()
                                ->title('القيمة المدخلة غير صحيحة!')
                                ->danger()
                                ->body('قيمة الفاتورة يجب أن تكون رقمية.')
                                ->send();
                        }
                    }),
                
                Forms\Components\Select::make('status')
                    ->options([
                        'paid' => 'مدفوعة',
                        'unpaid' => 'غير مدفوعة',
                    ])
                    ->required()
                    ->label('حالة الفاتورة'),

                Forms\Components\Select::make('company_id')
                    ->relationship('company', 'name')
                    ->required()
                    ->label('اسم الشركة'),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('status')->label('Status'),

                Tables\Columns\TextColumn::make('invoice_number')
                    ->label('رقم الفاتورة')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('client.company_name')
                    ->label('اسم العميل')
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('amount')
                    ->label('قيمة الفاتورة')
                    ->sortable()
                    ->formatStateUsing(fn ($state) => number_format($state, 2)), // تنسيق الرقم
                
                Tables\Columns\BadgeColumn::make('status')
                    ->label('حالة الفاتورة')
                    ->colors([
                        'success' => 'paid',
                        'danger' => 'unpaid',
                    ]),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label('حالة الفاتورة')
                    ->options([
                        'paid' => 'مدفوعة',
                        'unpaid' => 'غير مدفوعة',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->icon('heroicon-s-pencil')
                    ->label('تعديل'),
                
                Tables\Actions\DeleteAction::make()
                    ->icon('heroicon-s-trash')
                    ->label('حذف'),
                
                Action::make('cancel')
                    ->label('إلغاء الفاتورة')
                    ->color('danger')
                    ->icon('heroicon-o-x-circle')
                    ->action(function (Invoice $record) {
                        if ($record->status !== 'unpaid') {
                            Notification::make()
                                ->title('لا يمكن إلغاء الفاتورة.')
                                ->danger()
                                ->send();
                            return;
                        }

                        $record->update(['status' => 'cancelled']);

                        Notification::make()
                            ->title('تم إلغاء الفاتورة بنجاح.')
                            ->success()
                            ->send();
                    })
                    ->requiresConfirmation()
                    ->visible(fn (Invoice $record) => $record->status === 'unpaid'),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInvoices::route('/'),
            'create' => Pages\CreateInvoice::route('/create'),
            'edit' => Pages\EditInvoice::route('/{record}/edit'),
        ];
    }
}
