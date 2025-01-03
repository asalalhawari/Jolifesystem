<?php

namespace App\Filament\Reports;

use App\Models\Client;
use EightyNine\Reports\Components\Body\TextColumn;
use EightyNine\Reports\Components\Text;
use EightyNine\Reports\Report;
use EightyNine\Reports\Components\Body;
use EightyNine\Reports\Components\Footer;
use EightyNine\Reports\Components\Header;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;

class ClientsReport extends Report
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
                                TextColumn::make('name')
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
                            ])
                            ->data(
                                fn(?array $filters) => $filters ? Client::whereBetween('created_at', [$filters['start'], $filters['end']])->get() : collect()
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
