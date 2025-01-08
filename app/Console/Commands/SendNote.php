<?php

namespace App\Console\Commands;

use App\Models\Service;
use App\Models\User;
use Filament\Notifications\Notification;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SendNote extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-note';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        
    $users = User::role('super_admin')->get();
    $endedservies = Service::whereDate('end','<=', now())->get();
    $aboutservies = Service::whereDate('end','<=', now()->addMonth(1))->whereDate('end','>=', now())->get();
    // dd($aboutservies);
    foreach ($users as $recipient) {
        foreach ($endedservies as $ending) {
            $msg = 'Servies #: '. $ending->name .' for project :'. $ending->project->name .' was ended at '. $ending->end;
            DB::table('notifications')->insert([
                'id' => str()->uuid()->toString(),
                'type' => 'Filament\Notifications\DatabaseNotification',
                'notifiable_type' => get_class($recipient),
                'notifiable_id' => $recipient->id,
                'data' =>'{"actions":[],"body":null,"color":"danger","duration":"persistent","icon":null,"iconColor":null,"status":null,"title":"'.$msg.'","view":"filament-notifications::notification","viewData":[],"format":"filament"}',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        foreach ($aboutservies as $ending) {
            $msg = 'Servies #: '. $ending->name .' for project :'. $ending->project->name .' will end at '. $ending->end;
            DB::table('notifications')->insert([
                'id' => str()->uuid()->toString(),
                'type' => 'Filament\Notifications\DatabaseNotification',
                'notifiable_type' => get_class($recipient),
                'notifiable_id' => $recipient->id,
                'data' =>'{"actions":[],"body":null,"color":"warrning","duration":"persistent","icon":null,"iconColor":null,"status":null,"title":"'.$msg.'","view":"filament-notifications::notification","viewData":[],"format":"filament"}',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
        echo 'sent';
    }
}
