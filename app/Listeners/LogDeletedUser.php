<?php

namespace App\Listeners;

use App\Events\UserWasDeleted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogDeletedUser
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
     * @param  UserWasDeleted  $event
     * @return void
     */
    public function handle(UserWasDeleted $event)
    {
        //
    }
}
