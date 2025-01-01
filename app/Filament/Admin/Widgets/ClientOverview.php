<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Client;
use App\Models\Project;
use App\Models\Employee;
use App\Models\Invoice;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ClientOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $client_count = Client::count();
        $projects_count = Project::count();
        $employee_count = Employee::count();
        $invoice_count = Invoice::count();

        return [
            Stat::make('Clients Count', $client_count)
                ->description('Total registered clients')
                ->icon('heroicon-o-user-group')
                ->color('primary'), 

            Stat::make('Projects Count', $projects_count)
                ->description('Total ongoing projects')
                ->icon('heroicon-o-briefcase')
                ->color('success'), 

            Stat::make('Employee Count', $employee_count)
                ->description('Total active employees')
                ->icon('heroicon-o-users')
                ->color('warning'), 

            Stat::make('Invoice Count', $invoice_count)
                ->description('Total generated invoices')
                ->icon('heroicon-o-document-text')
                ->color('danger'), 
        ];
    }
    
}
