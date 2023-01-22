<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\GetVoucherNotification;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //Send Mail
    public function sendMail() {

        //send email to set mail address
        $name= 'Test';
        Mail::to('fake@mail.com')->send(new GetVoucherNotification($name));


        return redirect('/sekretariat');
    }
}
