<?php

namespace App\Listeners;

use App\Events\UserWasUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogUpdatedUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserWasUpdated  $event
     * @return void
     */
    public function handle(UserWasUpdated $event)
    {
        //
    }
}
