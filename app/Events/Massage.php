<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Massage implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

   public  $tname;
   public  $tid;
   public $timage;
   public  $sname;
   public  $sid;
   public  $massage;
    public function __construct($tname,$tid,$sname,$sid,$massage,$timage)
    {
        $this->tname = $tname;
        $this->tid = $tid;
        $this->sname = $sname;
        $this->sid = $sid;
        $this->massage = $massage;
        $this->timage=$timage;
    }


    public function broadcastOn()
    {
        return new Channel('chat');
    }
    public function broadcastAs()
    {
        return 'massage';

    }
}
