<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function subscribe(Request $request){
        $email = $request->input('email');
    }
}