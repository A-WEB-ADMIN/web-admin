<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Document;
use Illuminate\Notifications\Messages\BroadcastMessage;

class DBNotification extends Notification
{
    use Queueable;

    public $document;

    public function __construct($document)
    {
        $this->document = $document;
    }

    public function via($notifiable)
    {
        return ['database', 'broadcast'];
    }


    public function toDatabase($notifiable)
    {
        return [
            "document" => $this->document
        ];
    }


    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            "admin" => $notifiable
        ]);
    }






    /*=================================================
    =
    =  나중에 사용예정
    =
    =================================================*/
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }


}
