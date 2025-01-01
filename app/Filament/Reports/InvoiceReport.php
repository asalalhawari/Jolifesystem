<?php

namespace App\Filament\Reports;

use App\Models\Invoice;
use EightyNine\Reports\Components\Body\TextColumn;
use EightyNine\Reports\Components\Text;
use EightyNine\Reports\Report;
use EightyNine\Reports\Components\Body;
use EightyNine\Reports\Components\Footer;
use EightyNine\Reports\Components\Header;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;
use Filament\Tables\Columns\BadgeColumn;

class InvoiceReport extends Report
{
    public ?string $heading = "Report";

    // public ?string $subHeading = "A great report";

    public function header(Header $header): Header
    {
        return $header
                ->schema([
                    Header\Layout\HeaderRow::make()
                    ->schema([
                        Header\Layout\HeaderColumn::make()
                            ->schema([
                                Text::make("User registration report")
                                    ->title()
                                    ->primary(),
                                Text::make("A user registration report")
                                    ->subtitle(),
                            ]),
                        Header\Layout\HeaderColumn::make()
                            ->schema([
                            ])
                            ->alignRight(),
                    ]),
            ]);
    }


    public function body(Body $body): Body
    {
        return $body
            ->schema([
                Body\Layout\BodyColumn::make()
                ->schema([
                    Body\Table::make()
                        ->columns([
                            TextColumn::make('invoice_number')
                            ->label('رقم الفاتورة')
                            ->searchable()
                            ->sortable(),
                        
                        TextColumn::make('client.company_name')
                            ->label('اسم العميل')
                            ->searchable(),
                        
                        TextColumn::make('amount')
                            ->label('قيمة الفاتورة')
                            ->sortable(),
                        
                            TextColumn::make('status')
                            ->label('حالة الفاتورة')
                            ->colors([
                                'success' => 'paid',
                                'danger' => 'unpaid',
                            ]),
                        ])
                        ->data(
                            fn(?array $filters) => $filters ? Invoice::whereBetween('created_at', [$filters['start'], $filters['end']])->get() : collect()
                        ),

                ]),
            ]);
    }

    public function footer(Footer $footer): Footer
    {
        return $footer
            ->schema([
                // ...
            ]);
    }

    public function filterForm(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('start'),
                DatePicker::make('end'),
            ]);
    }
}
