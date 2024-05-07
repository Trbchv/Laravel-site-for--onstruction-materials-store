<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailer;

class MailController extends Controller
{
    public function send(Request $r)
    {
        $maildata = [];
        $maildata['name'] = $r->name;
        $maildata['phone'] = $r->phone;
        mail::to(env('MAIL_FROM_ADDRESS'))->send(new Mailer($maildata));
        return back();
    }
}
