<?php

namespace App;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class OrganizationRequest
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public $organization;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user, $organization)
    {
        //
        $this->user = $user;
        $this->organization = $organization;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
