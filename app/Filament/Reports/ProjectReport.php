<?php

namespace App\Filament\Reports;

use App\Models\Project;
use EightyNine\Reports\Components\Body\TextColumn;
use EightyNine\Reports\Report;
use EightyNine\Reports\Components\Body;
use EightyNine\Reports\Components\Footer;
use EightyNine\Reports\Components\Header;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Form;

class ProjectReport extends Report
{
    public ?string $heading = "Report";

    // public ?string $subHeading = "A great report";

    public function header(Header $header): Header
    {
        return $header
            ->schema([
                // ...
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
                            TextColumn::make('project_name')
                            ->label('اسم المشروع'),
        
                       TextColumn::make('project_description')
                            ->label('وصف المشروع'),
        
                       TextColumn::make('contract_value')
                            ->label('قيمة العقد'),
                        ])
                        ->data(
                            fn(?array $filters) => $filters ? Project::whereBetween('created_at', [$filters['start'], $filters['end']])->get() : collect()
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
