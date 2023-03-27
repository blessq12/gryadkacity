<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $path;

    public function __construct(Request $request){
        $this->path = $request->path();
    }
    public function index(){
        $page = [
            'layout' => 'front-layout',
            'title' => 'Главная страница',
            'description' => 'Описание главной страницы',
            'path' => $this->path
        ];
        return view('index',$page);
    }
    public function contact(){
        $page = [
            'layout' => 'default-layout',
            'title' => 'Контакты',
            'description' => 'Описание страницы контакты',
            'path' => $this->path,
        ];
        return view('contact',$page);
    }
}
