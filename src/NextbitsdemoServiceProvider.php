<?php
namespace Nextbits\Demo;

use Illuminate\Support\ServiceProvider;
use Illuminate\Console\Scheduling\Schedule;
use Nextbits\Demo\Console\Commands\EmailByCron;
use Illuminate\Contracts\Http\Kernel;
use Nextbits\Demo\Http\Middleware\LogIpOnLogin;
use Nextbits\Demo\Providers\EventServiceProvider;

class NextbitsdemoServiceProvider extends ServiceProvider{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'demo');

        /* Start Email By Cron */
        if ($this->app->runningInConsole()) {
            $this->commands([
                EmailByCron::class,
            ]);
        }

        $this->callAfterResolving(Schedule::class, function (Schedule $schedule) {
            $schedule->command('bycron:email')->everyMinute();
        });
        /* End Email By Cron */

        /* Start Middleware for Log Ip on Login */
        $kernel = $this->app->make(Kernel::class);
        $kernel->pushMiddleware(LogIpOnLogin::class);
        /* End Middleware for Log Ip on Login */
    }
    
    public function register()
    {
        $this->app['router']->middleware('LogIpOnLogin', 'Nextbits\Demo\Http\Middleware\LogIpOnLogin');
        $this->app->register(EventServiceProvider::class);
    }

}