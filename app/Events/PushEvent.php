<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\ApprovalLine;

class PushEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $approval_line;

    public function __construct(ApprovalLine $approval_line)
    {
        $this->approval_line = $approval_line;
    }


    public function broadcastOn()
    {
        return new PrivateChannel('events.' . $this->approval_line->receiver_id );
    }

    public function broadcastWith()
    {
        return [
            'message' => $this->approval_line->message
        ];
    }

}
