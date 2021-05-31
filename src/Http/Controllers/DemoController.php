<?php

namespace Nextbits\Demo\Http\Controllers;

use Nextbits\Demo\Events\SendMailByEvent;
use Nextbits\Demo\Events\SendMailByEventForQueueListner;
use Nextbits\Demo\Mail\EmailByListener;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class DemoController extends Controller
{
    //
    public function dashboard()
    {
        return view("demo::dashboard");
    }

    public function emailByListner()
    {
        event(new SendMailByEvent());
        return view("demo::dashboard");
    }

    public function emailByQuqueListner()
    {
        event(new SendMailByEventForQueueListner());
        return view("demo::dashboard");
    }


}
