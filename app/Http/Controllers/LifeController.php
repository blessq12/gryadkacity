<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeController extends Controller
{
    public function __construct(){
        $this->linkgroup = [
            [
                'title' => 'Професии',
                'url' => 'life.professions'
            ],[
                'title' => 'Карьера',
                'url' => 'life.career'
            ],[
                'title' => 'События',
                'url' => 'life.events'
            ]
        ];
    }
    public function index(){
        $breadcrumb = [['title' => 'Жизнь в грядке', 'url' => 'life.index']];
        $page = [
            'layout' => 'default-layout',
            'title' => 'Жизнь в грядке',
            'description' => 'Описание страницы Жизнь в грядке',
            'breadcrumb' => $breadcrumb,
            'linkgroup' => $this->linkgroup
        ];
        return view('life-index',$page);
    }
    public function professions(){
        $breadcrumb = [['title' => 'Жизнь в грядке', 'url' => 'life.index'],['title' => 'Профессии', 'url' => 'life.professions']];
        $page = [
            'layout' => 'default-layout',
            'title' => 'Професии',
            'description' => 'Описание страницы Професии',
            'breadcrumb' => $breadcrumb,
            'linkgroup' => $this->linkgroup
        ];
        return view('life-professions',$page);
    }
    public function career(){
        $breadcrumb = [['title' => 'Жизнь в грядке', 'url' => 'life.index'],['title' => 'Карьера', 'url' => 'life.career']];
        $page = [
            'layout' => 'default-layout',
            'title' => 'Карьера',
            'description' => 'Описание страницы Карьера',
            'breadcrumb' => $breadcrumb,
            'linkgroup' => $this->linkgroup
        ];
        return view('life-career',$page);
    }
    public function events(){
        $breadcrumb = [['title' => 'Жизнь в грядке', 'url' => 'life.index'],['title' => 'События', 'url' => 'life.events']];
        $page = [
            'layout' => 'default-layout',
            'title' => 'События',
            'description' => 'Описание страницы События',
            'breadcrumb' => $breadcrumb,
            'linkgroup' => $this->linkgroup
        ];
        return view('life-events',$page);
    }
}
