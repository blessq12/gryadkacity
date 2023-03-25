<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return 'about index method';
    }
    public function kids(){
        return 'about kids method';
    }
    public function parent(){
        return 'about parent method';
    }
    public function team(){
        return 'about team method';
    }
}
