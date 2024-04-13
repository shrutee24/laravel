<?php

namespace App\Listeners;

use App\Events\SubscribeEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class subscriberMailFired
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SubscribeEvent $event): void
    {
        
    }
}
