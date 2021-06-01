<?php

namespace Nextbits\Demo\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class EmailByCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bycron:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Mail::to('test@test.com')->send(new \Nextbits\Demo\Mail\EmailByCron());
        return 0;
    }
}
