<?php

namespace Nextbits\Demo\Providers;

use Nextbits\Demo\Events\SendMailByEvent;
use Nextbits\Demo\Events\SendMailByEventForQueueListner;
use Nextbits\Demo\Listeners\SendMailByListner;
use Nextbits\Demo\Listeners\SendMailByQueueListner;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        SendMailByEvent::class => [
            SendMailByListner::class,
        ],
        SendMailByEventForQueueListner::class => [
            SendMailByQueueListner::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
