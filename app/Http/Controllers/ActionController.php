<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SubscribeMail;

class ActionController extends Controller
{
    public function subscribe(Request $request){
        $email = $request->input('email');
        Mail::to('code70@inbox.ru')->send(new SubscribeMail($email));
    }
}
