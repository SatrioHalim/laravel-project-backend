<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\testMail;

class MailController extends Controller
{
    //
    public function sendMail(){
        Mail::to('satriohalim21@gmail.com')->send(new testMail());

        return "email has been sent successfully";
    }
}
