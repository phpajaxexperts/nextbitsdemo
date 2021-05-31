<?php

namespace Nextbits\Demo\Listeners;

use Nextbits\Demo\Mail\EmailByListener;
use Nextbits\Demo\Mail\EmailByQueueListener;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendMailByQueueListner implements ShouldQueue
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //
        Mail::to('test@test.com')->send(new EmailByQueueListener());
    }
}
