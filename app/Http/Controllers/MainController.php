<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return 'main index method';
    }
    public function contact(){
        return 'main contact method';
    }
}
