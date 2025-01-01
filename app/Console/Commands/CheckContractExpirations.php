<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Carbon\Carbon;
use App\Notifications\ContractExpirationNotification;

class CheckContractExpirations extends Command
{
    protected $signature = 'contracts:check-expirations';
    protected $description = 'Check for contracts nearing expiration and notify the manager';

    public function handle()
    {
        $today = Carbon::today();
        $upcomingExpirations = User::whereDate('contract_expiration', '<=', $today->addDays(7))->get(); // فحص العقود التي ستنتهي خلال 7 أيام

        foreach ($upcomingExpirations as $user) {
            // إرسال إشعار للمدير
            $manager = User::where('role', 'manager')->first(); // افترض أن لديك دور للمدير
            if ($manager) {
                $manager->notify(new ContractExpirationNotification($user));
            }
        }

        $this->info('Notifications for upcoming contract expirations sent.');
    }
}
