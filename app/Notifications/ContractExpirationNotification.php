<?php
namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class ContractExpirationNotification extends Notification
{
    use Queueable;

    private $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function via($notifiable)
    {
        return ['mail']; // يمكنك استخدام قنوات أخرى مثل database أو SMS
    }

    public function toMail($notifiable)
    {
        return (new \Illuminate\Notifications\Messages\MailMessage)
            ->subject('تذكير بانتهاء عقد')
            ->line("عقد المستخدم {$this->user->name} سينتهي قريبًا.")
            ->line('يرجى التحقق من تجديد العقد.')
            ->action('عرض المستخدم', url('/users/' . $this->user->id));
    }
}
