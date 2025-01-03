<?php

namespace App\Providers;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Invoice;
use App\Models\User;
use App\Observers\InvoiceObserver;
use Illuminate\Support\ServiceProvider;
use TomatoPHP\FilamentInvoices\Facades\FilamentInvoices;
use TomatoPHP\FilamentInvoices\Services\Contracts\InvoiceFor;
use TomatoPHP\FilamentInvoices\Services\Contracts\InvoiceFrom;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Invoice::observe(InvoiceObserver::class);

        FilamentInvoices::registerFor([
            InvoiceFor::make(User::class)
                ->label('Account'),
                InvoiceFor::make(Employee::class)
                ->label('Employee')
        ]);
        FilamentInvoices::registerFrom([
            InvoiceFrom::make(Client::class)
                ->label('Company'),
                InvoiceFrom::make(User::class)
                ->label('Account')
        ]);

    }
}
