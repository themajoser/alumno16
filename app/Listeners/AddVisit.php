<?php

namespace App\Listeners;

use App\Events\UserVisitPost;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class AddVisit
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
     * @param  UserVisitPost  $event
     * @return void
     */
    public function handle(UserVisitPost $event)
    {
       // $event->user->id!=$event->post->user_id ? $event->post->visits+=1 : null;
        $event->post->visits=1 ;
        $event->post->save();
    }
}
