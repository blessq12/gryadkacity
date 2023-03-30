<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SubscribeMail;

class ActionController extends Controller
{
    public function subscribe(Request $request){
        $email = $request->input('email');
        
        Mail::send('email.subscribe',['email' => $email],function($th){
            $th->to('code70@inbox.ru');
        });
    }
}
