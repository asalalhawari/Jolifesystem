<?php

namespace App\Filament\Reports;

use App\Models\Expense;
use EightyNine\Reports\Components\Body\TextColumn;
use EightyNine\Reports\Components\Text;
use EightyNine\Reports\Report;
use EightyNine\Reports\Components\Body;
use EightyNine\Reports\Components\Footer;
use EightyNine\Reports\Components\Header;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;

class ExpenseReport extends Report
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
                            TextColumn::make('expense_type')
                            ->label('نوع المصروف')
                            ->sortable()
                            ->formatStateUsing(fn (string $state): string => match ($state) {
                                'salary' => 'رواتب',
                                'service' => 'خدمات',
                                'materials' => 'مواد',
                                default => $state,
                            })
                            ->badge(),
                        TextColumn::make('amount')
                            ->label('القيمة')
                            ->sortable(),
                        TextColumn::make('notes')
                            ->label('الملاحظات')
                            ->limit(50),
                        ])
                        ->data(
                            fn(?array $filters) => $filters ? Expense::whereBetween('created_at', [$filters['start'], $filters['end']])->get() : collect()
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
