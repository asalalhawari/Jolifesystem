<?php

namespace App\Filament\Widgets;

use Filament\Widgets\BarChartWidget;
use App\Models\Client;

class ClientReport extends BarChartWidget
{

    protected static ?string $heading = 'تقارير العملاء والمبالغ المستحقة';

    protected function getData(): array
    {
        $clients = Client::with('invoices')->get();
        $labels = $clients->pluck('name');
        $data = $clients->map(function ($client) {
            return $client->invoices->sum('amount_due');
        });

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'المبالغ المستحقة',
                    'backgroundColor' => '#3498DB',
                    'data' => $data,
                ],
            ],
        ];
    }
}
