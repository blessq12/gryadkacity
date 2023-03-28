<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $path;

    public function __construct(Request $request){
    }
    public function index(){
        $page = [
            'layout' => 'front-layout',
            'title' => 'Главная страница',
            'description' => 'Описание главной страницы',
        ];
        return view('index',$page);
    }
    public function contact(){
        $breadcrumb = [['title' => 'Контакты','url' => 'contact']];
        $page = [
            'layout' => 'default-layout',
            'title' => 'Контакты',
            'description' => 'Описание страницы контакты',
            'breadcrumb' => $breadcrumb
        ];
        return view('contact',$page);
    }
}
