<?php

namespace App\Listeners;

use App\Events\AcceptTender;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AcceptTenderListener
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
     * @param  AcceptTender  $event
     * @return void
     */
    public function handle(AcceptTender $event)
    {
        //
    }
}
